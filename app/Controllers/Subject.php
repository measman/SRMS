<?php

namespace App\Controllers;

use \App\Models\SubjectModel;

class Subject extends BaseController
{
    public $subjectmodel;
    public $session;
    public function __construct()
    {        
        $this->session = session();
        $this->subjectmodel = new SubjectModel();
    }
    
    public function manage()
    {        
        $data['content'] = $this->subjectmodel->findAll();
        return view('admin/manage-subject', $data);
    }

    
    function action()
    {
        $subjectname_error = '';
        $subjectcode_error = '';
        $fmth_error = '';
        $tch_error = '';
        
        $error = 'no';
        $success = 'no';
        $message = '';
        if ($this->request->getVar('action')) {
            $rules = [
                'subjectname' => 'required',
                'subjectcode' => 'required',
                'fmth' => 'required',
                'tch' => 'required'
            ];
            if ($this->validate($rules)) {
                $success = 'yes';

                if ($this->request->getVar('action')) {
                    $subjectname = $this->request->getVar('subjectname');
                    $subjectcode = $this->request->getVar('subjectcode');
                    $fmth = $this->request->getVar('fmth');
                    $tch = $this->request->getVar('tch');

                    $insert_data = array(
                        'SubjectName' => $subjectname,
                        'SubjectCode' => $subjectcode,
                        'fm_th' => $fmth,
                        'total_cr_hr' => $tch
                    );
                    if ($this->request->getVar('action') == 'Edit') {
                        $id = $this->request->getVar('hidden_id');
                        $insert_data['StudentId'] = $id;
                    }

                    if ($this->subjectmodel->save($insert_data)) {
                        $message = 'New Student Added Succesfully.';
                    } else {
                        $message = 'Sorry, New Student Adding Failed.';
                    }
                }
            } else {
                $error = 'yes';
                $subjectname_error = display_error($this->validator, 'subjectname');
                $subjectcode_error = display_error($this->validator, 'subjectcode'); 
                $fmth_error = display_error($this->validator, 'fmth');
                $tch_error = display_error($this->validator, 'tch');            
            }

            $output = array(
                'subjectname_error' => $subjectname_error,
                'subjectcode_error' => $subjectcode_error, 
                'fmth_error' => $fmth_error,
                'tch_error' => $tch_error,             
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
            $class_data = $this->subjectmodel->where('id', $this->request->getVar('id'))->first();
            echo json_encode($class_data);
        }
    }

    function delete()
    {
        if ($this->request->getVar('id')) {
            $id = $this->request->getVar('id');
            $emp_data = $this->subjectmodel->where('id', $id)->delete($id);
            echo json_encode(['message' => 'Deleted Successfully']);
        }
    }
    
}   