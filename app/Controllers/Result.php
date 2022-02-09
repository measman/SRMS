<?php

namespace App\Controllers;

use \App\Models\StudentsModel;
use \App\Models\ClassesModel;
use \App\Models\ResultModel;
use \App\Models\SubjectCombinationModel;

class Result extends BaseController
{
    public $studentsmodel;
    public $classesmodel;
    public $resultmodel;
    public $subjectcombinationmodel;
    public $session;
    public function __construct()
    {        
        $this->session = session();
        $this->studentsmodel = new StudentsModel();
        $this->classesmodel = new ClassesModel();
        $this->resultmodel = new ResultModel();
        $this->subjectcombinationmodel = new SubjectCombinationModel();
    }
    
    public function manage()
    {        
        $data['content'] = $this->resultmodel->getAllResults();
        $data['classes'] = $this->classesmodel->findAll();
        return view('admin/manage-results', $data);
    }

    
    function action()
    {
        
        $classid_error = '';
        $studentid_error = '';
        $error = 'no';
        $success = 'no';
        $message = '';
        if ($this->request->getVar('action')) {
            $rules = [
                //'StudentName', 'RollId', 'StudentEmail', 'Gender', 'DOB', 'ClassId', 'RegDate','Status'
                
                'classid' => 'required',
                'studentid' => 'required'               
            ];
            if ($this->validate($rules)) {
                $success = 'yes';

                if ($this->request->getVar('action')) {
                    $classid = $this->request->getVar('classid');
                    $studentid = $this->request->getVar('studentid');
                    $mark = $this->request->getVar('marks');
                    $sid=array();
                    $subject_data = $this->subjectcombinationmodel->getSubjectCombinationsbyClass($classid);
                    foreach($subject_data as $sd)
                        {
                        array_push($sid,$sd['id']);
                        } 
                    for($i=0;$i<count($mark);$i++){
                        $insert_data = array(
                            'ClassId' => $classid,
                            'StudentId' => $studentid,
                            'SubjectId' => $sid[$i],
                            'marks' => $mark[$i]
                        );
                        if ($this->request->getVar('action') == 'Edit') {
                            $id = $this->request->getVar('id');
                            $insert_data['id'] = $id[$i];
                        }

                        if ($this->resultmodel->save($insert_data)) {
                            $message = 'New Result Added Succesfully.';
                        } else {
                            $message = 'Sorry, New Result Adding Failed.';
                        }
                    }
                }
            } else {
                $error = 'yes';
                $classid_error = display_error($this->validator, 'classid');
                $studentid_error = display_error($this->validator, 'studentid');                
            }

            $output = array(
                'classid_error' => $classid_error,
                'studentid_error' => $studentid_error,              
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
            $class_data = $this->resultmodel->where('StudentId', $this->request->getVar('id'))->findAll();
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

    function checkStudentsResult(){
        if ($this->request->getVar('studentid')) {
            $studentid = $this->request->getVar('studentid');
            $classid = $this->request->getVar('classid');
            $student_result_data = $this->resultmodel->getResults($classid,$studentid);
            if(sizeof($student_result_data) == 0){
                echo json_encode(['status' => 'nodata']);
            }else{
                echo json_encode(['status' => 'data']);
            }
            
        }

    }

    function getResultbyRoll(){
        $rollid = $this->request->getVar('rollid');
            $classid = $this->request->getVar('class');
        
            $data['std'] = $this->resultmodel->getStudentforResult($rollid,$classid); 
            $data['results'] = $this->resultmodel->getResultByRollId($rollid,$classid);           
            
        
        return view('view-result',$data);
    }
    
}   