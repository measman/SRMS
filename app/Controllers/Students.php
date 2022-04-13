<?php

namespace App\Controllers;

use \App\Models\StudentsModel;
use \App\Models\ClassesModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Students extends BaseController
{
    public $studentsmodel;
    public $classesmodel;
    public $session;
    public function __construct()
    {        
        $this->session = session();
        $this->studentsmodel = new StudentsModel();
        $this->classesmodel = new ClassesModel();
    }
    
    public function manage()
    {        
        $data['content'] = $this->studentsmodel->getAllStudents();
        $data['classes'] = $this->classesmodel->findAll();
        return view('admin/manage-students', $data);
    }

    
    function action()
    {
        $fullanme_error = '';
        $rollid_error = '';
        $gender_error = '';
        $class_error = '';
        $dob_error = '';
        $error = 'no';
        $success = 'no';
        $message = '';
        if ($this->request->getVar('action')) {
            $rules = [
                //'StudentName', 'RollId', 'StudentEmail', 'Gender', 'DOB', 'ClassId', 'RegDate','Status'
                'fullanme' => 'required',
                'rollid' => 'required',
                'gender' => 'required',
                'class' => 'required',
                'dob' => 'required'               
            ];
            if ($this->validate($rules)) {
                $success = 'yes';

                if ($this->request->getVar('action')) {
                    $fullanme = $this->request->getVar('fullanme', FILTER_SANITIZE_STRING);
                    $rollid = $this->request->getVar('rollid');
                    $gender = $this->request->getVar('gender', FILTER_SANITIZE_STRING);
                    $emailid = $this->request->getVar('emailid', FILTER_SANITIZE_STRING);
                    $class = $this->request->getVar('class', FILTER_SANITIZE_STRING);
                    $dob = $this->request->getVar('dob');
                    

                    $insert_data = array(
                        'StudentName' => $fullanme,
                        'RollId' => $rollid,
                        'StudentEmail' => $emailid,
                        'Gender' => $gender,                        
                        'ClassId' => $class,
                        'DOB' => $dob,
                        'Status' => 1
                    );
                    if ($this->request->getVar('action') == 'Edit') {
                        $id = $this->request->getVar('hidden_id');
                        $insert_data['StudentId'] = $id;
                    }

                    if ($this->studentsmodel->save($insert_data)) {
                        $message = 'New Student Added Succesfully.';
                    } else {
                        $message = 'Sorry, New Student Adding Failed.';
                    }
                }
            } else {
                $error = 'yes';
                $fullanme_error = display_error($this->validator, 'fullanme');
                $rollid_error = display_error($this->validator, 'rollid');
                $gender_error = display_error($this->validator, 'gender');
                $class_error = display_error($this->validator, 'class');
                $dob_error = display_error($this->validator, 'dob');                
            }

            $output = array(
                'fullanme_error' => $fullanme_error,
                'rollid_error' => $rollid_error,
                'gender_error' => $gender_error,  
                'class_error' => $class_error,  
                'dob_error' => $dob_error,                
                'error' => $error,
                'success' => $success,
                'message' => $message
            );
            echo json_encode($output);
        }
    }

    function fetch_single_data()
    {
        if ($this->request->getVar('id')) {
            $class_data = $this->studentsmodel->where('StudentId', $this->request->getVar('id'))->first();
            echo json_encode($class_data);
        }
    }

    function delete()
    {
        if ($this->request->getVar('id')) {
            $id = $this->request->getVar('id');
            $emp_data = $this->studentsmodel->where('id', $id)->delete($id);
            echo json_encode(['message' => 'Deleted Successfully']);
        }
    }

    function get_students_by_class()
    {
        if ($this->request->getVar('id')) {
            $student_data = $this->studentsmodel->getStudentsbyClass($this->request->getVar('id'));
            echo json_encode($student_data);
        }
    }

    function set_students_status()
    {
        if ($this->request->getVar('id')) {
            $student_data = $this->studentsmodel->where('StudentId',$this->request->getVar('id'))->set('Status',$this->request->getVar('status'))->update();
            echo json_encode(['message' => 'Status Changed Successfully']);
        }
    }

    public function import()
    {

        $data = array();

        ## Validation
        $validation = \Config\Services::validation();
        $input = $validation->setRules([
            'upload_filename' => 'uploaded[upload_filename]|max_size[upload_filename,2048]|ext_in[upload_filename,csv,xlsx,xls],'
            //'project_id' => 'required'
        ]);
        if ($validation->withRequest($this->request)->run() == FALSE) {
            $data['success'] = 0;
            $data['error'] = $validation->getError('upload_filename'); // Error response
        } else {
            if ($file = $this->request->getFile('upload_filename')) {
                if ($file->isValid() && !$file->hasMoved()) {
                    // Get file name and extension
                    $name = $file->getClientName();
                    $ext = $file->getClientExtension();
                    // Get random file name
                    $newName = explode(".", $name)[0] . "_" . $file->getRandomName();
                    // Store file in public/uploads/ folder
                    $file->move('../public/uploads', $newName);
                    // File path to display preview
                    $filepath = base_url() . "/uploads/" . $newName;
                    // Response
                    $data['success'] = 1;
                    // $data['message'] = 'Uploaded Successfully!';
                    $data['filepath'] = $filepath;
                    $data['filename'] = $newName;
                    $data['extension'] = $ext;
                    if ('csv' == $ext) {
                        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
                    } elseif ('xls' == $ext) {
                        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
                    } else {
                        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
                    }
                    $spreadsheet = $reader->load("../public/uploads/" . $newName);
                    $sheetData = $spreadsheet->getActiveSheet()->toArray();

                    $project_id = $this->request->getVar('project_id');

                    $flag = true;
                    $i = 0;
                    foreach ($sheetData as $row) {
                        if ($flag) {
                            $flag = false;
                            continue;
                        }
                        $insertdata[$i]['StudentName'] = $row[0];
                        $insertdata[$i]['RollId'] = $row[1];
                        $insertdata[$i]['RegNo'] = $row[2];
                        $insertdata[$i]['StudentEmail'] = $row[3];
                        $insertdata[$i]['Gender'] = $row[4];
                        $insertdata[$i]['DOB'] = $row[5];
                        $insertdata[$i]['ClassId'] = $row[6];
                        $insertdata[$i]['RegDate'] = $row[7];
                        $i++;
                    }
                    if ($this->studentsmodel->insertBatch($insertdata)) {
                        $data['message'] =  'Added Succesfully.';
                    } else {
                        $data['message'] =  'Sorry, Saving Data Failed';
                    }
                    $data['filedata'] = $insertdata;
                } else {
                    // Response
                    $data['success'] = 2;
                    $data['message'] = 'File not uploaded.';
                }
            } else {
                // Response
                $data['success'] = 2;
                $data['message'] = 'File not uploaded.';
            }
        }
        return $this->response->setJSON($data);

        
    }
    
}   