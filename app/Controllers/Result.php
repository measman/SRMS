<?php

namespace App\Controllers;

use \App\Models\StudentsModel;
use \App\Models\ClassesModel;
use \App\Models\ResultModel;
use \App\Models\SubjectCombinationModel;
use \App\Libraries\RPDF;

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
                    $inmark = $this->request->getVar('inmarks');
                    $sid = array();
                    $subject_data = $this->subjectcombinationmodel->getSubjectCombinationsbyClass($classid);
                    foreach ($subject_data as $sd) {
                        array_push($sid, $sd['id']);
                    }
                    for ($i = 0; $i < count($mark); $i++) {
                        $insert_data = array(
                            'ClassId' => $classid,
                            'StudentId' => $studentid,
                            'SubjectId' => $sid[$i],
                            'marks' => $mark[$i],
                            'in_marks' => $inmark[$i]
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

    function checkStudentsResult()
    {
        if ($this->request->getVar('studentid')) {
            $studentid = $this->request->getVar('studentid');
            $classid = $this->request->getVar('classid');
            $student_result_data = $this->resultmodel->getResults($classid, $studentid);
            if (sizeof($student_result_data) == 0) {
                echo json_encode(['status' => 'nodata']);
            } else {
                echo json_encode(['status' => 'data']);
            }
        }
    }

    function getResultbyRoll()
    {
        $rollid = $this->request->getVar('rollid');
        $classid = $this->request->getVar('class');

        $data['std'] = $this->resultmodel->getStudentforResult($rollid, $classid);
        $data['results'] = $this->resultmodel->getResultByRollId($rollid, $classid);


        return view('view-result', $data);
    }

    function viewPrintResult(){
        $data['classes'] = $this->classesmodel->findAll();
        return view('admin/print-results',$data);
    }

    function printResult()
    {
        $rollid = $this->request->getVar('rollid');
        $classid = $this->request->getVar('class');

        $data['std'] = $this->resultmodel->getStudentforResult($rollid, $classid);
        $data['results'] = $this->resultmodel->getResultByRollId($rollid, $classid);

       
        // create new PDF document
        $pdf = new RPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Suman Tandukar');
        $pdf->SetTitle('CHAMUNDA SECONDARY SCHOOL');
        $pdf->SetSubject('Grade XI Result');

        // set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'CHAMUNDA SECONDARY SCHOOL' . '', 'CHAMUNDA, DIAKLEKH');

        // set header and footer fonts
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        // set font
        $pdf->SetFont('dejavusans', '', 10);

        $pdf->AddPage();
        $html = view('pdf-result', $data);
        $pdf->SetXY(15, 50);
        $pdf->writeHTML($html, true, false, true, false, '');
        $linestyle = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 2, 'phase' => 0, 'color' => array(0, 0, 0));
        $pdf->Line(78, 56, 195, 56, $linestyle);
        $pdf->Line(52, 63, 125, 63, $linestyle);
        $pdf->Line(128, 63, 195, 63, $linestyle);
        $pdf->Line(55, 69, 102, 69, $linestyle);
        $pdf->Line(130, 69, 162, 69, $linestyle);
        $pdf->Line(180, 69, 195, 69, $linestyle);
        $pdf->Line(108, 76, 195, 76, $linestyle);
        // $pdf->Line(115, 174, 190, 174, $linestyle);
        $pdf->lastPage();
        $this->response->setContentType('application/pdf');
        $pdf->Output('result.pdf', 'I');
    }

    function printClassResult()
    {
        
        $classid = $this->request->getVar('class');

        $students= $this->resultmodel->getStudentforResult(null, $classid);
        if(sizeof($students)>0){
        
        // create new PDF document
        $pdf = new RPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Suman Tandukar');
        $pdf->SetTitle('CHAMUNDA SECONDARY SCHOOL');
        $pdf->SetSubject('Grade XI Result');

        // set default header data
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'CHAMUNDA SECONDARY SCHOOL' . '', 'CHAMUNDA, DIAKLEKH');

        // set header and footer fonts
        $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        // set font
        $pdf->SetFont('dejavusans', '', 10);
        
        foreach($students as $std){

                $pdf->AddPage();
                $data['std'] = [0=>$std];
                $data['results'] = $this->resultmodel->getResultByRollId($std['RollId'], $classid);
                if(sizeof($data['results'])<1){
                    $html =  "<center><h3 style=\"color:red\">!!!!!Result Not Found!!!!!</h3></center>";
                }else{
                    $html = view('pdf-result', $data);
                }
                $pdf->SetXY(15, 50);
                $pdf->writeHTML($html, true, false, true, false, '');
                $linestyle = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 2, 'phase' => 0, 'color' => array(0, 0, 0));
                $pdf->Line(78, 56, 195, 56, $linestyle);
                $pdf->Line(52, 63, 125, 63, $linestyle);
                $pdf->Line(128, 63, 195, 63, $linestyle);
                $pdf->Line(55, 69, 102, 69, $linestyle);
                $pdf->Line(130, 69, 162, 69, $linestyle);
                $pdf->Line(180, 69, 195, 69, $linestyle);
                $pdf->Line(108, 76, 195, 76, $linestyle);
                // $pdf->Line(115, 174, 190, 174, $linestyle);
                    
        }
        $pdf->lastPage();
        $this->response->setContentType('application/pdf');
        $pdf->Output('result.pdf', 'I');
    }else{
        $html =  "<center><h3 style=\"color:red\">!!!!!Students Not Found in this class!!!!!</h3></center>";
        echo $html;
    }
    }
}