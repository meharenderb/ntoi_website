<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserAuthModel;

class UserAuth extends BaseController
{
    public function __construct()
    {
        helper(["form", "url"]);
        $this->userAuthModel = new UserAuthModel();
        
    }
    public function index($email, $token)
    {
        $session = \Config\Services::session();

        $emailString = trim($email);
        $tokenString = trim($token);

        $result = $this->userAuthModel->verifyEmail($emailString,$tokenString);
        if($result === 'VERIFIED'){
            $session->remove('already');
            $session->setFlashdata('verified', 'Thanks! You successfully confirmed your email address. We\'ll meet you in the NTOI Event. <strong>Practice HARD!</strong>');
        }else if($result === 'ALL-READY'){
            $session->remove('verified');
            $session->setFlashdata('already', 'Hey! Your email address is already verified. We\'ll meet you in the NTOI Event. <strong>Practice HARD!</strong>');
        }else{
            $session->remove(['already','verified']);
           return redirect()->to('/');
        }
        // View of Email Verification Page
        return view("email_verification_view");

    }

    public function thankYouPage(){
        return view('thank_you_view');
    }

}
