<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'role';
    protected $returnType = 'array';
    protected $allowedFields = ['name'];

   
}