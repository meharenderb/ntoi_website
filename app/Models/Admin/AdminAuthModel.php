<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class AdminAuthModel extends Model
{
    public function authenticateAdminEmail($email){
        $query =  $this->db->table('users')->select('id, username, email, status, password, category')
        ->where(['email' => $email]);
        $result = $query->get();
        if(count($result->getResultArray()) == 1){
            return $result->getRowArray();
        }else{
            return false;
        }
    }
}
