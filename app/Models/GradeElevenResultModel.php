<?php

namespace App\Models;

use \CodeIgniter\Model;

class GradeElevenResultModel extends Model
{

    protected $table = 'tblclass11result';

    protected $primaryKey = 'id';

    protected $allowedFields = ['reg_no', 'year', 'school', 'program', 'first_name', 'mid_name', 'last_name', 'gender', 'dob', 'father_name', 'mother_name', 'exam_roll_no', 'registered_sub', 'row_index'];
    
}