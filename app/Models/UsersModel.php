<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['name','email','phone','password','role_id','picture'];

    public function getDataUsers($data)
    {
        
    }

    public function insertDataUsers($data)
    {
        $this->save([
            'role_id' => 1,
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => $data['password']      
        ]);

        return true;
    }
}