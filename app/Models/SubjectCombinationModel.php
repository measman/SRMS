<?php

namespace App\Models;

use \CodeIgniter\Model;

class SubjectCombinationModel extends Model
{

    protected $table = 'tblsubjectcombination';

    protected $primaryKey = 'id';
 
    protected $allowedFields = ['ClassId', 'SubjectId','status', 'Creationdate','UpdationDate'];

    public function getAllSubjectCombinations(){
            $builder = $this->db->table('tblsubjectcombination tsc'); //SELECT tblclasses.ClassName,tblclasses.Section,tblsubjects.SubjectName,tblsubjectcombination.id as scid,tblsubjectcombination.status from tblsubjectcombination join tblclasses on tblclasses.id=tblsubjectcombination.ClassId  join tblsubjects on tblsubjects.id=tblsubjectcombination.SubjectId
            $builder->select('tsc.id,ts.SubjectName,tsc.id as scid,tsc.status,tc.ClassName,tc.Section');
            $builder->join('tblsubjects ts', 'ts.id=tsc.SubjectId');
            $builder->join('tblclasses tc', 'tc.id=tsc.ClassId');
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