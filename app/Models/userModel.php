<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    public function getUser($username)
    {
        return $this->db->table($this->table)
            ->where('username', $username)
            ->get()
            ->getFirstRow();
    }

    public function verifyUser($username, $password)
    {
        $user = $this->getUser($username);
        if (!$user) {
            return false;
        }

        return password_verify($password, $user['password']);
    }
}
