<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "username";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'name'];

    public function getusermodel($name = false)
    {
        if ($name === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['name' => $name]);
        }
    }

    public function deleteProduct($username)
    {
        $query = $this->db->table('users')->delete(array('username' => $username));
        return $query;
    }
}
