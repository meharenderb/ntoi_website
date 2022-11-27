<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    public function __construct()
    {
        helper(["form", "url", "validation", "database"]);
        $this->session = session();
        $this->homeModel = new HomeModel();
    }
    public function index()
    {
        return view('home_view');
        // return view('otp_verification_view');
        //Generate a random string.
        // $token = openssl_random_pseudo_bytes(16);

        // //Convert the binary data into hexadecimal representation.
        // $token = bin2hex($token);
        // echo base_url(). "/$token";die;
        // $emailData['username'] = "Rohit";
        // $emailData['message'] = "You registrered successfully using examplemail@gmail.com. Confirm your email address to continue the registration process.";
        // $emailData['token'] = base_url(). "/$token";
        // echo view('templates/after_everify_template', array('data' => $emailData));

        // return view('templates/email_template', array('data' => $data));
    }

    public function registration_view()
    {
        $stateList = $this->homeModel->getStateName();

        $data = ["stateList" => $stateList];

        return view('registration_view', $data);
    }

    public function getStateName()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            $result = $this->homeModel->getStateName();
            if ($result) {
                echo json_encode(['status' => 'true', 'msg' => 'State loaded Successfully!', 'data' => $result]);
            } else {
                echo json_encode(['status' => 'false', 'msg' => 'No records found!', -1]);
            }
        } else {
            echo json_encode(['status' => 'false', 'msg' => 'Invalid Request Method', -1]);
        }
    }

    public function saveRegistrationDetails()
    {
        $session = \Config\Services::session();
        // $validation = \Config\Services::validation();

        $data = $this->request->getVar();

        $rules = [
            'name' => [
                'rules'  => 'required|alpha_space|max_length[50]',
                'errors' => [
                    'required' => 'Name is required.',
                    'alpha_space' => 'Name should be alphabatic only.',
                    'max_length' => 'Name should not be greater than 50 characters.'
                ]
            ],
            'email' => [
                'rules'  => "required|regex_match[/^[a-zA-Z0-9_.+-]+@((gmail|yahoo|hotmail|outlook|zoho)).*\.[a-zA-Z]{2,6}$/]|is_unique[registration.email]",
                'errors' => [
                    'required' => 'Email name is required.',
                    'valid_email' => 'Please enter a valid email address.',
                    'regex_match' => 'Please enter a valid email address.',
                    'is_unique' => 'Email already exist in our system.'
                ]
            ],
            'father_name' => [
                'rules'  => 'required|alpha_space|max_length[50]',
                'errors' => [
                    'required' => 'Father name is required.',
                    'alpha_space' => 'Father name should be alphabatic only.',
                    'max_length' => 'Father name should not be greater than 50 characters.'
                ]
            ],
            'mother_name' => [
                'rules'  => 'required|alpha_space|max_length[50]',
                'errors' => [
                    'required' => 'Mother name is required.',
                    'alpha_space' => 'Mother name should be alphabatic only.',
                    'max_length' => 'Mother name should not be greater than 50 characters.'
                ]
            ],
            'gender' => [
                'rules'  => 'required|alpha_space|max_length[50]',
                'errors' => [
                    'required' => 'Gender is required.',
                    'alpha_space' => 'Gender should be alphabatic only.',
                    'max_length' => 'Gender should not be greater than 50 characters.'
                ]
            ],
            'age' => [
                'rules'  => 'required|numeric|max_length[2]',
                'errors' => [
                    'required' => 'Age is required.',
                    'numeric' => 'Age should be numeric only.',
                    'max_length' => 'Age should not be greater than 2 digit.'
                ]
            ],
            'dob' => [
                'rules'  => 'required|valid_date',
                'errors' => [
                    'required' => 'D.O.B is required.',
                    'valid_date' => 'D.O.B should be a valid date.'
                ]
            ],
            'mobile_no' => [
                'rules'  => 'required|regex_match[/^[6-9]\d{9}$/]',
                'errors' => [
                    'required' => 'Mobile No. is required.',
                    'regex_match' => 'Mobile No. should be a valid.'
                ]
            ],
            'alt_mobile_no' => [
                'rules'  => 'regex_match[/^[6-9]\d{9}$/]',
                'errors' => [
                    'regex_match' => 'Alt. Mobile No. should be a valid.'
                ]
            ],
            'qualification' => [
                'rules'  => 'required|alpha_space',
                'errors' => [
                    'required' => 'Qualification is required.',
                    'alpha_space' => 'Alphabatic characters allowed only.'
                ]
            ],
            'state' => 'required',
            'city' => [
                'rules'  => 'required|alpha_space|max_length[50]',
                'errors' => [
                    'required' => 'City is required.',
                    'alpha_space' => 'Alphabatic characters allowed only.',
                    'max_length' => 'City should not be greater than 50 characters.'
                ]
            ],
            'pincode' => [
                'rules'  => 'required|numeric|exact_length[6]',
                'errors' => [
                    'required' => 'Pincode is required.',
                    'numeric' => 'Pincode should be numeric only.',
                    'exact_length' => 'Please enter valid six digit pincode.'
                ]
            ],
            'weight' => 'numeric',
            'height' => 'numeric',
            'skills' => [
                'rules'  => 'required|alpha_space|max_length[150]',
                'errors' => [
                    'required' => 'Skills is required.',
                    'alpha_space' => 'Alphabatic characters allowed only.',
                    'max_length' => 'Skills should not be greater than 150 characters.'
                ]
            ],
            'fbl' => [
                'rules'  => 'required|valid_url_strict[http,https]',
                'errors' => [
                    'required' => 'Facebook link is required.',
                    'valid_url_strict' => 'Please enter a valid URL.'
                ]
            ],
            'igl' => [
                'rules'  => 'required|valid_url_strict[http,https]',
                'errors' => [
                    'required' => 'Instagram link is required.',
                    'valid_url_strict' => 'Please enter a valid URL.'
                ]
            ],
            'links' => 'valid_url',
            'address' => 'required|alpha_numeric_punct',
            'category' => 'required',
        ];



        // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($this->validate($rules)) {
            $result = $this->homeModel->saveRegistrationDetails($data);

            if ($result === true) {
                 $session->remove('EXIST');
                // return view('thank_you_view');
                return redirect()->to('Thank-you');
                // return view('otp_verification_view',$obj);
                // echo json_encode(['status' => "SUCCESS", "message" => "You successfully registered. Check you email inbox or spam/trash to verify your email."]);
            } else if($result === 'EXIST') {
                $session->setFlashdata('EXIST', "{$data['email']} already registered in NTOI. Please try another email.");
                return redirect()->to('registration');
            }else{
                $session->remove('EXIST');
                return redirect()->to('/');
            }
        } else {
            // $data['validation'] = $this->validator;
            $stateList = $this->homeModel->getStateName();

            $data = ["stateList" => $stateList, 'validation' => $this->validator];
            echo view('registration_view', $data);
        }
        // }else{
        //     $session->remove('EXIST');
        //     return redirect()->to('/');
        // }
    }

    public function verifyOTP()
    {
        // $session = \Config\Services::session();

        // $data = $this->request->getVar();

        // $data['user_id'] = $session->getTempdata('user_id');

        // if (isset($data['otp']) && $data['otp'] != '' && isset($data['user_id']) && $data['user_id'] != '') {
        //     $result = $this->homeModel->verifyOTP($data);

        //     if ($result === 'verified') {
        //         echo json_encode(['status' => "SUCCESS", "message" => "Email verification successfull."]);
        //     } else if ($result === 'wrong') {
        //         echo json_encode(['status' => "FAILED", "message" => "In-Correct OTP"]);
        //     }
        // } else {
        //     echo json_encode(['status' => "FAILED", "message" => "Invalid Data"]);
        // }

        // if ($result) {
        //     $email['email'] = $data['email'];
        //     return view('otp_verification_view',$email);
        //     // echo json_encode(['status' => "SUCCESS", "message" => "You successfully registered. Check you email inbox or spam/trash to verify your email."]);
        // } else {
        //     echo json_encode(['status' => "FAILED", "message" => "Sorry! Something went wrong."]);
        // }
    }

    public function otp_page()
    {
        return view('otp_verification_view');
    }

    public function verify_otp_page()
    {
        $session = \Config\Services::session();

        $rules = [
            'otp' => "required|integer|max_length[6]"
        ];

        if ($this->validate($rules)) {

            $data = $this->request->getVar();
            $data['user_id'] = $session->get('user_id');
            print_r($data);

            if (isset($data['otp']) && $data['otp'] != '' && isset($data['user_id']) && $data['user_id'] != '') {
                $result = $this->homeModel->verifyOTP($data);

                if ($result === 'right') {
                    $session->setFlashdata('success', "Email verification successfull.");
                    unset($_SESSION['error']);
                } else if ($result === 'wrong') {
                    $session->setFlashdata('error', "In-Correct OTP");
                } else {
                    $session->setFlashdata('error', "Something went wrong");
                }
            } else {
                $session->setFlashdata('error', "Invalid Data");
                // echo json_encode(['status' => "FAILED", "message" => "Invalid Data"]);
            }
        } else {
            $data['validation'] = $this->validator;
        }
        return view('otp_verification_view', $data);
    }

    public function aboutPage()
    {
        return view('about_show_view');
    }
    public function dancingCategoryPage()
    {
        return view('dancing_view');
    }
    public function singingCategoryPage()
    {
        return view('singing_view');
    }
    public function modelingCategoryPage()
    {
        return view('modeling_view');
    }
    public function prizesOffersPage()
    {
        return view('prizes_and_offers_view');
    }
    public function kidsFashionPage()
    {
        return view('kids_fashion_view');
    }
    public function tandcPage()
    {
        return view('t_and_c');
    }
    public function actingPage()
    {
        return view('acting_view');
    }
}
