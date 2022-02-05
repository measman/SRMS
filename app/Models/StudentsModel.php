<?php

namespace App\Models;

use \CodeIgniter\Model;

class StudentsModel extends Model
{

    protected $table = 'tblstudents';

    protected $primaryKey = 'StudentId';
 
    protected $allowedFields = ['StudentName', 'RollId', 'StudentEmail', 'Gender', 'DOB', 'ClassId', 'RegDate','Status'];

    //SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId
    public function getAllStudents(){
        $builder = $this->db->table('tblstudents ts');
        $builder->select('ts.StudentName,ts.RollId,ts.RegDate,ts.StudentId,ts.Status,tc.ClassName,tc.Section');
        $builder->join('tblclasses tc', 'tc.id=ts.ClassId');
        $result = $builder->get();
        if (count($result->getResultArray()) > 0) {
            return $result->getResultArray();
        } else {
            return false;
        }
    }

    public function getStudentsbyClass($class){
        $builder = $this->db->table('tblstudents');
        $builder->select('StudentName,StudentId,Status');
        $builder->where('ClassId', $class);
        $builder->orderBy('StudentName');
        $result = $builder->get();
        if (count($result->getResultArray()) > 0) {
            return $result->getResultArray();
        } else {
            return array();
        }
    }
}