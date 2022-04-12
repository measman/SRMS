<?php

namespace App\Models;

use \CodeIgniter\Model;

class StudentSubjectModel extends Model
{

    protected $table = 'tblstudentsubject';

    protected $primaryKey = 'id';
 
    protected $allowedFields = ['ClassId', 'SubjectId','StudentId', 'Rollid'];

    public function getAllStudentSubject(){
            $builder = $this->db->table('tblstudentsubject tss'); //SELECT tblclasses.ClassName,tblclasses.Section,tblsubjects.SubjectName,tblsubjectcombination.id as scid,tblsubjectcombination.status from tblsubjectcombination join tblclasses on tblclasses.id=tblsubjectcombination.ClassId  join tblsubjects on tblsubjects.id=tblsubjectcombination.SubjectId
            $builder->select('tss.id,tst.StudentId,tst.StudentName,ts.SubjectName,tc.ClassName,tc.Section');
            $builder->join('tblsubjects ts', 'ts.id=tss.SubjectId');
            $builder->join('tblclasses tc', 'tc.id=tss.ClassId');
            $builder->join('tblstudents tst', 'tst.StudentId=tss.StudentId');
//                echo($builder);
            $result = $builder->get();
            if (count($result->getResultArray()) > 0) {
                return $result->getResultArray();
            } else {
                return array();
            }
        }

    public function getSubjectCombinationsbyClass($classid){
        $builder = $this->db->table('tblsubjectcombination tsc'); 
        $builder->select('ts.id,ts.SubjectName');
        $builder->join('tblsubjects ts', 'ts.id=tsc.SubjectId');
        $builder->where('tsc.ClassId',$classid);
        $result = $builder->get();
        if (count($result->getResultArray()) > 0) {
            return $result->getResultArray();
        } else {
            return array();
        }
    }
}