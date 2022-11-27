<?php

namespace App\Models;

use CodeIgniter\Model;

use mysqli;

class HomeModel extends Model
{
    public function getStateName()
    {
        $result = $this->db->table('state')->select('state_title')->get()->getResultArray();

        if ($result) {
            return $result;
        } else {
            return [];
        }
    }
    public function saveRegistrationDetails($obj)
    {
        $checkEmail = $this->db->table('registration')->getWhere(['email' => $obj['email']])->getRowArray();
        
        if (!($checkEmail > 0)) {
            $mail = \config\Services::email();

            //Generate a random string.
            $token = openssl_random_pseudo_bytes(16);

            //Convert the binary data into hexadecimal representation.
            $token = bin2hex($token);

            if (isset($obj['category']) && $obj['category'] != '') {
                $category = [];
                foreach ($obj['category'] as $value) {
                    if (count($obj['category']) > 1) {
                        array_push($category, $value);
                    } else {
                        $category = $value;
                    }
                }
                if (is_array($category)) {
                    $category = implode(", ", $category);
                }
            }

            $data = [
                'name' => isset($obj['name']) ? esc($obj['name']) : '',
                'email' => isset($obj['email']) ? esc($obj['email']) : '',
                'father_name' => isset($obj['father_name']) ? esc($obj['father_name']) : '',
                'mother_name' => isset($obj['mother_name']) ? esc($obj['mother_name']) : '',
                'gender' => isset($obj['gender']) ? esc($obj['gender']) : '',
                'age' => isset($obj['age']) ? esc($obj['age']) : '',
                'dob' => isset($obj['dob']) ? esc($obj['dob']) : '',
                'mobile_no' => isset($obj['mobile_no']) ? esc($obj['mobile_no']) : '',
                'alt_mobile_no' => isset($obj['alt_mobile']) ? esc($obj['alt_mobile']) : '',
                'qualification' => isset($obj['qualification']) ? esc($obj['qualification']) : '',
                'state' => isset($obj['state']) ? esc($obj['state']) : '',
                'city' => isset($obj['city']) ? esc($obj['city']) : '',
                'pincode' => isset($obj['pincode']) ? esc($obj['pincode']) : '',
                'weight' => isset($obj['weight']) ? esc($obj['weight']) : '',
                'height' => isset($obj['height']) ? esc($obj['height']) : '',
                'skills' => isset($obj['skills']) ? esc($obj['skills']) : '',
                'facebook' => isset($obj['fbl']) ? esc($obj['fbl']) : '',
                'instagram' => isset($obj['igl']) ? esc($obj['igl']) : '',
                'links' => isset($obj['links']) ? esc($obj['links']) : '',
                'address' => isset($obj['address']) ? esc($obj['address']) : '',
                'category' => (!empty($category)) ? esc($category) : '',
                'token' => $token
            ];


            $query = $this->db->table('registration')->insert($data);
            $user_id = $this->db->insertID();

            if ($user_id > 0) {
                // $otpCode = $this->generateOTPs($user_id);
                $emailData['username'] = $data['name'];
                $emailData['message'] = "You registered successfully using ".$obj['email'].". Confirm your email address to continue the registration process.";

                // $emailData['message'] = "Dear " . $data['name'] . ",<br>Thank you for registering in National Talent of India. This email is to sent you to confirm your email address using this link.";
                $emailData['token'] = base_url() . "/email-verification/" . $obj['email'] . "/$token";
                $emailString = view('templates/email_verification_template', array('data' => $emailData));

                $mail->setFrom(NO_REPLY_EMAIL, 'NTOI');
                $mail->setTo(trim($data['email']));

                $mail->setSubject('Your NTOI Registration Verification Link');
                $mail->setMessage($emailString);

                if ($mail->send()) {
                    return true;
                } else {
                    return false;
                }
                // else {
                //     $data = $mail->printDebugger(['headers']);
                //     echo "<pre>";
                //     print_r($data);
                // }
            } else {
                return false;
            }
        } else {
            // exit('else');
            return 'EXIST';
        }
    }

    public function generateOTPs($user_id)
    {
        $otp = rand(111111, 999999);

        $query = $this->db->table('otp_codes')->insert(['user_id' => $user_id, 'otp' => $otp]);

        if ($query) {
            return $otp;
        } else {
            return false;
        }
    }

    public function verifyOTP($param)
    {
        $where = [
            'otp' => $param['otp'],
            'user_id' => $param['user_id'],
            'status' => 'PENDING'
        ];


        $otpVerify = $this->db->table('otp_codes')->where($where)->get()->getRowArray();
        // print_r($otpVerify);
        // die;
        if (!empty($otpVerify)) {

            $otpApproved = $this->db->table('otp_codes')->update(['status' => 'APPROVED'], ['user_id' => $param['user_id']]);
            $userVerified = $this->db->table('registration')->update(['status' => 'VERIFIED'], ['id' => $param['user_id']]);
            if ($otpApproved) {
                if ($userVerified) {
                    return 'right';
                } else {
                    return "failed";
                }
            } else {
                return "failed";
            }
        } else {
            return "wrong";
        }
    }
}
