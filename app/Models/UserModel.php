<?php

namespace App\Models;

class UserModel extends \CodeIgniter\Model
{
    protected $table = 'users';
    
    protected $allowedFields = ['name', 'email', 'password'];
    
    protected $returnType = 'App\Entities\User';

    protected $validationRules = [
        'name' => 'required',
        'email' => 'required|valid_email|is_unique[users.email]',
        'password' => 'required|min_length[6]',
    ];

    protected $validationMessages = [
        'email' => [
            'is_unique' => 'That email address is already used'
        ]
    ];

    protected $beforeInsert = ['hashPassword'];

    protected function hashPassword(array $data)
    {
       
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        
        return $data;
    }
}