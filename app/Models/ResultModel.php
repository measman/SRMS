<?php

namespace App\Models;

use \CodeIgniter\Model;

class ResultModel extends Model
{

    protected $table = 'tblresult';

    protected $primaryKey = 'id';
 
    protected $allowedFields = ['StudentId', 'ClassId', 'SubjectId', 'marks', 'PostingDate', 'UpdationDate'];

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
}