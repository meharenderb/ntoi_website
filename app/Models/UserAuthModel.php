<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAuthModel extends Model
{
    public function verifyEmail($email, $token)
    {
        $mail = \config\Services::email();
        $isUserVerified = $this->isUserVerified($email, $token);
        if (!$isUserVerified) {
            $query = $this->db->table('registration')
            ->update(['status' => 'VERIFIED'],['email' => $email, 'token' => $token]);
            $participant = $this->getParticipantData($email);
            $category = explode(',',$participant['category']);
            $categoryCount = count($category);
            if ($query) { 
                $emailData['username'] = $participant['name'];
                 $emailData['message'] = "You successfully verified your email address. We'll meet you in NTOI.<br>";
                // $emailData['message'] = "You successfully verified your email address.<br>You participate in <strong>$categoryCount category.</strong> According to selected category, you have to pay the amount of <strong>".($categoryCount*1000)."/- Rupees only.</strong><br><br>";
                // $emailData['message'] .= "<strong>Payment Methods Details:</strong><br>";
                // $emailData['message'] .= "<strong>PAYTM & Google Pay / Phone Pay</strong><br>";
                // $emailData['message'] .= "<strong>Mobile No. :</strong> 8006986871<br>";
                // $emailData['message'] .= "<strong>Account Transfer:</strong><br>";
                // $emailData['message'] .= "<strong>Account No. :</strong> 37996267424<br>";
                // $emailData['message'] .= "<strong>IFSC Code :</strong> SBIN0003772<br>";
                // $emailData['message'] .= "<strong>Account Holder :</strong> Sachin Kashyap<br><br>";
                // $emailData['message'] .= "You can choose any payment option to pay your Registration fees.<br><br>";
                // $emailData['message'] .= "After payment call us and wait for 4-5 hours to verifying your payment details.<br><br>";
                // $emailData['message'] .= "After we confirm your payment details we verify your registration payment status to verify after that you recieve a payment confirmation.<br>";
                $emailData['message'] .= "Thanks & Regards<br>#TeamNTOI<br>";
                $emailString = view('templates/after_everify_template', array('data' => $emailData));

                $mail->setFrom(NO_REPLY_EMAIL, 'NTOI');
                $mail->setTo(trim($email));

                $mail->setSubject('Important! Email Verified Successfully');
                $mail->setMessage($emailString);

                if ($mail->send()) {
                    return 'VERIFIED';
                } else {
                    return false;
                }   
            }else{
                return 'ERROR';
            }
        } else {
            return 'ALL-READY';
        }

    }
    public function isUserVerified($email, $token)
    {
        $query = $this->db->table('registration')->select('name')
            ->where(['email' => $email, 'token' => $token, 'status' => 'VERIFIED'])
            ->get()->getRowArray();

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getParticipantData($email)
    {
        $query = $this->db->table('registration')->select('*')
            ->where(['email' => $email,'status' => 'VERIFIED'])
            ->get()->getRowArray();

        if ($query) {
            return $query;
        } else {
            return [];
        }
    }

}
