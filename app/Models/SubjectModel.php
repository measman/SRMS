<?php

namespace App\Models;

use \CodeIgniter\Model;

class SubjectModel extends Model
{

    protected $table = 'tblsubjects';

    protected $primaryKey = 'id';
 
    protected $allowedFields = ['SubjectName', 'SubjectCode', 'Creationdate','UpdationDate'];

    // public function getAllStudents(){
    //         $builder = $this->db->table('tblstudents ts');
    //         $builder->select('ts.StudentName,ts.RollId,ts.RegDate,ts.StudentId,ts.Status,tc.ClassName,tc.Section');
    //         $builder->join('tblclasses tc', 'tc.id=ts.ClassId');
    //         $result = $builder->get();
    //         if (count($result->getResultArray()) > 0) {
    //             return $result->getResultArray();
    //         } else {
    //             return false;
    //         }
    //     }
}