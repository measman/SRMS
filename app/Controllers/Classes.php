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
    public function index()
    {
        
        $data['validation'] = null;
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'classname' => 'required',
                'classnamenumeric' => 'required',
                'section' => 'required'                
            ];
            if ($this->validate($rules)) {
                $classname = $this->request->getVar('classname', FILTER_SANITIZE_STRING);
                $classnamenumeric = $this->request->getVar('classnamenumeric');
                $section = $this->request->getVar('section', FILTER_SANITIZE_STRING);
                $insert_data = array(
                    'ClassName' => $classname,
                    'ClassNameNumeric' => $classnamenumeric,
                    'Section' => $section                
                );


                if ($this->classesmodel->save($insert_data)) {
                    $this->session->setTempdata('success', 'New Class Added Succesfully.', 3);
                } else {
                    $this->session->setTempdata('error', 'Sorry, New Class Adding Failed.', 3);
                    return redirect()->to(current_url())->withInput();
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }


        return view('admin/create-class', $data);
    }

    public function manage()
    {
        
        $data['content'] = $this->classesmodel->findAll();
        return view('admin/manage-classes', $data);
    }

    
}   