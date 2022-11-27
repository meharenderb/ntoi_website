<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class PerformerModel extends Model
{
    function viewAllPerformers()
    {
        $getAllPerformers = $this->db->table('registration')->where(['is_deleted'=>0])->orderBy('id', 'desc')->get()->getResultArray();

        $maleCount = $this->malePerformersCount();
        $femaleCount = $this->femalePerformersCount();
        $totalCount = $maleCount + $femaleCount; 
        if ($getAllPerformers) {
            return ['data' => $getAllPerformers, 'male' => $maleCount, 'female' => $femaleCount, 'total' =>$totalCount];
        } else {
            return [];
        }
    }
    function malePerformersCount()
    {
        $count = $this->db->table('registration')->select('count(id) as femalecount')->getWhere(['gender' => 'Male','is_deleted'=>0])->getRowArray();

        if ($count) {
            return $count['femalecount'];
        } else {
            return false;
        }
    }
    function femalePerformersCount()
    {
        $count = $this->db->table('registration')->select('count(id) as malecount')->getWhere(['gender' => 'Female','is_deleted'=>0])->getRowArray();

        if ($count) {
            return $count['malecount'];
        } else {
            return false;
        }
    }

    public function getUserDetailsById($id){
        $query = $this->db->table('registration')->getWhere(['id' => $id])->getRowArray();

        if($query){
            return $query;
        }else{
            return [];
        }
    }
    public function receviedPayment($id){
        $mail = \config\Services::email();
        $isEmailVerified = $this->db->table('registration')
        ->where(['id' => $id, 'status' => 'VERIFIED'])
        ->get()->getRowArray();

        $isPaymentDone = $this->db->table('registration')
        ->where(['id' => $id, 'status' => 'VERIFIED', 'pstatus' => 'VERIFIED'])
        ->get()->getRowArray();

        if($isEmailVerified){
            if(!$isPaymentDone){
                $query = $this->db->table('registration')->update(['pstatus' => 'VERIFIED'],['id' => $id]);
                $participant = $this->getUserDetailsById($id);
                if($query) {
                        $emailData['username'] = $participant['name'];
                        $emailData['message'] = "We successfully verified your payment details.<br>";
                        $emailData['message'] .= "<strong>NATIONAL TALENT OF INDIA</strong> heartly welcomes you in the show.<br><br>";
                        $emailData['message'] .= "Don't forget to practice hard. Because this competition is going to tough. Make sure your prepare for it.<br><br>";
                        $emailData['message'] .= "Thanks & Regards<br>#TeamNTOI";
                        $emailString = view('templates/after_pverify_template', array('data' => $emailData));
        
                        $mail->setFrom(NO_REPLY_EMAIL, 'NTOI');
                        $mail->setTo(trim($participant['email']));
        
                        $mail->setSubject('Hurray! Payment Verified Successfully');
                        $mail->setMessage($emailString);
        
                        if ($mail->send()) {
                            return 'VERIFIED';
                        } else {
                            return false;
                        }       
                    return 'VERIFIED';
                }else{
                    return false;
                }
                }else{
                    return 'ALREADY';
                }
        }else{
            return 'EMAIL_NOT_VERIFY';
        }
        
    }

    public function manuallyEmailVerification($id){
        $mail = \config\Services::email();
        $isUserVerified = $this->isUserVerified($id);
        if (!$isUserVerified) {
            $query = $this->db->table('registration')
            ->update(['status' => 'VERIFIED'],['id' => $id, 'status' => 'PENDING']);
            $participant = $this->getParticipantData($id);
            $category = explode(',',$participant['category']);
            $categoryCount = count($category);
            if ($query) { 
                $emailData['username'] = $participant['name'];
                $emailData['message'] = "You successfully verified your email address.<br>You participate in <strong>$categoryCount category.</strong> According to selected category, you have to pay the amount of <strong>".($categoryCount*1000)."/- Rupees only.</strong><br><br>";
                $emailData['message'] .= "<strong>Payment Methods Details:</strong><br>";
                $emailData['message'] .= "<strong>PAYTM & Google Pay / Phone Pay</strong><br>";
                $emailData['message'] .= "<strong>Mobile No. :</strong> 8006986871<br>";
                $emailData['message'] .= "<strong>Account Transfer:</strong><br>";
                $emailData['message'] .= "<strong>Account No. :</strong> 37996267424<br>";
                $emailData['message'] .= "<strong>IFSC Code :</strong> SBIN0003772<br>";
                $emailData['message'] .= "<strong>Account Holder :</strong> Sachin Kashyap<br><br>";
                $emailData['message'] .= "You can choose any payment option to pay your Registration fees.<br><br>";
                $emailData['message'] .= "After payment call us and wait for 4-5 hours to verifying your payment details.<br><br>";
                $emailData['message'] .= "After we confirm your payment details we verify your registration payment status to verify after that you recieve a payment confirmation.<br>";
                $emailData['message'] .= "Thanks & Regards<br>#TeamNTOI<br>";
                $emailString = view('templates/after_everify_template', array('data' => $emailData));

                $mail->setFrom(NO_REPLY_EMAIL, 'NTOI');
                $mail->setTo(trim($participant['email']));

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
            return 'ALREADY';
        }
        
    }

    public function exportParticipateData(){
        $result = $this->db->table('registration')->orderBy('id', 'desc')->get()->getResultArray();

        if($result){
            return $result;
        }else{
            return [];
        }
    }

    public function isUserVerified($id)
    {
        $query = $this->db->table('registration')->select('name')
            ->where(['id' => $id, 'status' => 'VERIFIED'])
            ->get()->getRowArray();

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getParticipantData($id)
    {
        $query = $this->db->table('registration')->select('*')
            ->where(['id' => $id,'status' => 'VERIFIED'])
            ->get()->getRowArray();

        if ($query) {
            return $query;
        } else {
            return [];
        }
    }
}
