<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';
    protected $returnType     = 'array';
    protected $allowedFields = ['first_name', 'last_name','email','password','profile','role','date_of_birth','gender'];
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    public function createUsers($userInfo){
        $this->insert([
            'email' => $userInfo['email'],
            'password' => $userInfo['password'],
            'role' => $userInfo['role'],
        ]);
    }
    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);

        return $data;
    }

    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data);

        return $data;
    }

    protected function passwordHash(array $data){
        if(isset($data['data']['password'])){
            $data['data']['password'] = password_hash($data['data']['password'],PASSWORD_DEFAULT);
        }
        return $data;
    }
}