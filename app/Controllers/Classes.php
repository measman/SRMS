<?php

namespace App\Controllers;

use \App\Models\ClassesModel;

class Classes extends BaseController
{
    public $classesmodel;
    public $session;
    public function __construct()
    {        
        $this->session = session();
        $this->classesmodel = new ClassesModel();
    }
    
    public function manage()
    {
        
        $data['content'] = $this->classesmodel->findAll();
        return view('admin/manage-classes', $data);
    }

    
    function action()
    {
        $classname_error = '';
        $classnamenumeric_error = '';
        $section_error = '';
        $error = 'no';
        $success = 'no';
        $message = '';
        if ($this->request->getVar('action')) {
            $rules = [
                'classname' => 'required',
                'classnamenumeric' => 'required',
                'section' => 'required'                
            ];
            if ($this->validate($rules)) {
                $success = 'yes';

                if ($this->request->getVar('action')) {
                    $classname = $this->request->getVar('classname', FILTER_SANITIZE_STRING);
                $classnamenumeric = $this->request->getVar('classnamenumeric');
                $section = $this->request->getVar('section', FILTER_SANITIZE_STRING);
                    

                    $insert_data = array(
                        'ClassName' => $classname,
                        'ClassNameNumeric' => $classnamenumeric,
                        'Section' => $section                
                    );
                    if ($this->request->getVar('action') == 'Edit') {
                        $id = $this->request->getVar('hidden_id');
                        $insert_data['id'] = $id;
                    }

                    if ($this->classesmodel->save($insert_data)) {
                        $message = 'New Class Added Succesfully.';
                    } else {
                        $message = 'Sorry, New Class Adding Failed.';
                    }
                }
            } else {
                $error = 'yes';
                $classname_error = display_error($this->validator, 'txtfullname');
                $classnamenumeric_error = display_error($this->validator, 'slcdepartment');
                $section_error = display_error($this->validator, 'slcdesignation');
            }

            $output = array(
                'txtfullname_error' => $classname_error,
                'slcdepartment_error' => $classnamenumeric_error,
                'slcdesignation_error' => $section_error,                
                'error'             => $error,
                'success'           => $success,
                'message'           => $message
            );
            echo json_encode($output);
        }
    }

    function fetch_single_data()
    {
        if ($this->request->getVar('id')) {
            $class_data = $this->classesmodel->where('id', $this->request->getVar('id'))->first();
            echo json_encode($class_data);
        }
    }

    function delete()
    {
        if ($this->request->getVar('id')) {
            $id = $this->request->getVar('id');
            $emp_data = $this->classesmodel->where('id', $id)->delete($id);
            echo json_encode(['message' => 'Deleted Successfully']);
        }
    }
    
}   