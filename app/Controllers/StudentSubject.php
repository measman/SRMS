<?php

namespace App\Controllers;

use \App\Models\SubjectModel;
use \App\Models\ClassesModel;
use \App\Models\StudentsModel;
use \App\Models\StudentSubjectModel;

class StudentSubject extends BaseController
{
    public $subjectmodel;
    public $classesmodel;
    public $studentsubjectmodel;
    public $session;
    public function __construct()
    {        
        $this->session = session();
        $this->subjectmodel = new SubjectModel();
        $this->classesmodel = new ClassesModel();
        $this->studentsmodel = new StudentsModel();
        $this->studentsubjectmodel = new StudentSubjectModel();
    }
    
    public function manage()
    {        
        $data['content'] = $this->studentsubjectmodel->getAllStudentSubject();
        $data['students'] = $this->studentsmodel->findAll();
        $data['classes'] = $this->classesmodel->findAll();
        $data['subjects'] = $this->subjectmodel->findAll();
        return view('admin/manage-studentsubject', $data);
    }

    
    function action()
    {
        $class_error = '';
        $subject_error = '';
        $student_error = '';
        
        $error = 'no';
        $success = 'no';
        $message = '';
        if ($this->request->getVar('action')) {
            $rules = [
                'class' => 'required',
                'student' => 'required'
            ];
            if ($this->validate($rules)) {
                $success = 'yes';

                if ($this->request->getVar('action')) {
                    $class = $this->request->getVar('class', FILTER_SANITIZE_STRING);
                    $student = $this->request->getVar('student', FILTER_SANITIZE_STRING);
                    $subjects = $this->request->getVar('subjects');
                    foreach($subjects as $sub){

                    
                        $insert_data = array(
                            'ClassId' => $class,
                            'SubjectId' => $sub,
                            'StudentId' => $student
                        );
                        // if ($this->request->getVar('action') == 'Edit') {
                        //     $id = $this->request->getVar('hidden_id');
                        //     $insert_data['id'] = $id;
                        // }

                        if ($this->studentsubjectmodel->save($insert_data)) {
                            $message = 'New Student Added Succesfully.';
                        } else {
                            $message = 'Sorry, New Student Adding Failed.';
                        }
                    }
                }
            } else {
                $error = 'yes';
                $class_error = display_error($this->validator, 'class');
                $subject_error = display_error($this->validator, 'subject');            
            }

            $output = array(
                'class_error' => $class_error,
                'subject_error' => $subject_error,             
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
            $class_data = $this->subjectcombinationmodel->where('id', $this->request->getVar('id'))->first();
            echo json_encode($class_data);
        }
    }

    function delete()
    {
        if ($this->request->getVar('id')) {
            $id = $this->request->getVar('id');
            $emp_data = $this->subjectcombinationmodel->where('id', $id)->delete($id);
            echo json_encode(['message' => 'Deleted Successfully']);
        }
    }

    function get_subjectcombination_by_class()
    {
        if ($this->request->getVar('id')) {
            $subject_data = $this->subjectcombinationmodel->getSubjectCombinationsbyClass($this->request->getVar('id'));
            echo json_encode($subject_data);
        }
    }

    function set_subjectcombination_status()
    {
        if ($this->request->getVar('id')) {
            $student_data = $this->subjectcombinationmodel->where('id',$this->request->getVar('id'))->set('status',$this->request->getVar('status'))->update();
            echo json_encode(['message' => 'Status Changed Successfully']);
        }
    }
    
}   