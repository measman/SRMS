<?php

namespace App\Models;

use \CodeIgniter\Model;

class ResultModel extends Model
{

    protected $table = 'tblresult';

    protected $primaryKey = 'id';
 
    protected $allowedFields = ['StudentId', 'ClassId', 'SubjectId', 'marks', 'in_marks', 'PostingDate', 'UpdationDate'];

    // SELECT  distinct tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblresult join tblstudents on tblstudents.StudentId=tblresult.StudentId  join tblclasses on tblclasses.id=tblresult.ClassId
    public function getAllResults(){
        $builder = $this->db->table('tblresult tr');
        $builder->distinct();
        $builder->select('ts.StudentName,ts.RollId,ts.RegDate,ts.StudentId,ts.Status,tc.ClassName,tc.Section');
        $builder->join('tblstudents ts', 'ts.StudentId=tr.StudentId');
        $builder->join('tblclasses tc', 'tc.id=tr.ClassId');
        $result = $builder->get();
        if (count($result->getResultArray()) > 0) {
            return $result->getResultArray();
        } else {
            return array();
        }
    }

    public function getResults($classid,$studentid){
        $builder = $this->db->table('tblresult tr');
        $builder->select('StudentId,ClassId');
        $builder->where('StudentId',$studentid);
        $builder->where('ClassId',$classid);
        $result = $builder->get();
        if (count($result->getResultArray()) > 0) {
            return $result->getResultArray();
        } else {
            return array();
        }
    }
    public function getResultByRollId($rollid,$classid){
        //select t.StudentName,t.RollId,t.ClassId,t.marks,SubjectId,tblsubjects.SubjectName from (select sts.StudentName,sts.RollId,sts.ClassId,tr.marks,SubjectId from tblstudents as sts join  tblresult as tr on tr.StudentId=sts.StudentId) as t join tblsubjects on tblsubjects.id=t.SubjectId where (t.RollId=:rollid and t.ClassId=:classid)
        $builder = $this->db->table('(select sts.StudentName,sts.RollId,sts.ClassId,tr.marks,tr.in_marks,SubjectId from tblstudents as sts join  tblresult as tr on tr.StudentId=sts.StudentId) as t');
        $builder->select('t.StudentName,t.RollId,t.ClassId,t.marks,t.in_marks,t.SubjectId,tblsubjects.SubjectCode,tblsubjects.SubjectName,tblsubjects.fm_th,tblsubjects.total_cr_hr');
        $builder->join('tblsubjects','tblsubjects.id=t.SubjectId');
        $builder->where('t.RollId',$rollid);
        $builder->where('t.ClassId',$classid);
        $result = $builder->get();
        if (count($result->getResultArray()) > 0) {
            return $result->getResultArray();
        } else {
            return array();
        }
    }

    public function getStudentforResult($rollid,$classid){
        $builder = $this->db->table('tblstudents');
        $builder->select('tblstudents.StudentName,tblstudents.RollId,tblstudents.DOB,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section');
        $builder->join('tblclasses','tblclasses.id=tblstudents.ClassId');
        if($rollid!=null){
            $builder->where('tblstudents.RollId',$rollid);
        }
        $builder->where('tblstudents.ClassId',$classid);
        $result = $builder->get();
        if (count($result->getResultArray()) > 0) {
            return $result->getResultArray();
        } else {
            return array();
        }
    }
}