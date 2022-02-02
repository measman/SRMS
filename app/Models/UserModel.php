<?php

namespace App\Models;

use \CodeIgniter\Model;

class UserModel extends Model
{

    protected $table = 'admin';

    protected $primaryKey = 'id';

    protected $allowedFields = ['UserName', 'Password'];
    
}