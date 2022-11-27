<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class UsersModel extends Model
{
    public function viewAllUsers()
    {
        $getAllUsers = $this->db->table('users')->orderBy('id', 'desc')->get()->getResultArray();

        if ($getAllUsers) {
            return $getAllUsers;
        } else {
            return [];
        }
    }
    public function addUser($data)
    {
        if(isset($data['password']) && $data['password'] != ''){
            $password = $data['password'];
        }else{
            $password = random_string('alnum', 8);
        }

        $userArray = [
            'email' => $data['email'],
            'category' => $data['category'],
            'password' => md5($password),
            'status' => $data['status'],
        ];
        $query = $this->db->table('users')->insert($userArray);
        $resultId = $this->db->insertID();
        if ($resultId) {
                $mail = \config\Services::email();

                $emailData['username'] = 'there!';
                $emailData['message'] = "Your <strong>NTOI</strong> Admin Portal account is created by admin.<br><br>";
                $emailData['message'] .= "<strong>Here's the details to log in to your account:</strong><br>";
                $emailData['message'] .= "<strong>Login URL:</strong> ".base_url('/portal-login')."<br>";
                $emailData['message'] .= "<strong>Email:</strong> ".$data['email']."<br>";
                $emailData['message'] .= "<strong>Password:</strong> ".$password."<br><br>";
                $emailData['message'] .= "Thanks & Regards<br>#TeamNTOI";
                $emailString = view('templates/admin_user_ac_template', array('data' => $emailData));

                $mail->setFrom(NO_REPLY_EMAIL, 'NTOI');
                $mail->setTo(trim($data['email']));

                $mail->setSubject('Check! Your NTOI Admin Account is Created');
                $mail->setMessage($emailString);

                if ($mail->send()) {
                    return true;
                } else {
                    return false;
                }       
        } else {
            return false;
        }
    }
}
