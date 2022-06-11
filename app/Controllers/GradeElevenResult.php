<?php

namespace App\Controllers;

use \App\Models\GradeElevenResultModel;

class GradeElevenResult extends BaseController
{
    public $gradeelevenresultmodel;
    public $session;
    public function __construct()
    {        
        $this->session = session();
        $this->gradeelevenresultmodel = new GradeElevenResultModel();
    }
    public function manage()
    {        
        
        $data['gradeelevenresultmodel'] = $this->gradeelevenresultmodel->findAll();
        return view('admin/manage-gradeelevenresult', $data);
    }
    
    public function import()
    {

        $data = array();

        ## Validation
        $validation = \Config\Services::validation();
        $input = $validation->setRules([
            'grdelv' => 'uploaded[grdelv]|max_size[grdelv,2048]|ext_in[grdelv,csv,xlsx,xls],'
            //'project_id' => 'required'
        ]);
        if ($validation->withRequest($this->request)->run() == FALSE) {
            $data['success'] = 0;
            $data['error'] = $validation->getError('grdelv'); // Error response
        } else {
            if ($file = $this->request->getFile('grdelv')) {
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

                    $flag = true;
                    $i = 0;
                    foreach ($sheetData as $row) {
                        if ($flag) {
                            $flag = false;
                            continue;
                        }
                        // 'reg_no', 'year', 'school', 'program', 'first_name', 'mid_name', 'last_name', 'gender', 'dob', 'father_name', 'mother_name', 'exam_roll_no', 'registered_sub', 'row_index'
                        $insertdata[$i]['reg_no'] = $row[0];
                        $insertdata[$i]['year'] = $row[1];
                        $insertdata[$i]['school'] = $row[2];
                        $insertdata[$i]['program'] = $row[3];
                        $insertdata[$i]['first_name'] = $row[4];
                        $insertdata[$i]['mid_name'] = $row[5];
                        $insertdata[$i]['last_name'] = $row[6];
                        $insertdata[$i]['gender'] = $row[7];
                        $insertdata[$i]['dob'] = $row[8];
                        $insertdata[$i]['father_name'] = $row[9];
                        $insertdata[$i]['mother_name'] = $row[10];
                        $insertdata[$i]['exam_roll_no'] = $row[11];
                        $insertdata[$i]['registered_sub'] = $row[12];
                        $insertdata[$i]['row_index'] = $row[13];
                        $i++;
                    }
                    if ($this->gradeelevenresultmodel->insertBatch($insertdata)) {
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