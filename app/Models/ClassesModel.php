<?php

namespace App\Models;

use \CodeIgniter\Model;

class ClassesModel extends Model
{

    protected $table = 'tblclasses';

    protected $primaryKey = 'id';

    protected $allowedFields = ['ClassName', 'ClassNameNumeric', 'Section'];
    
}