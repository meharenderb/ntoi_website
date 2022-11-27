<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\UsersModel;
class UsersController extends BaseController
{   
    public function __construct()
    {
        $this->usersModel = new UsersModel();
        helper(['form','text']);
        date_default_timezone_set('Asia/Kolkata');
    }
    public function index()
    {
        if(session()->get('category') != 'OWNER'){
            return redirect()->to(base_url().'/admin');
        }
        $result = $this->usersModel->viewAllUsers();

        return view("admin_panel/all_users", ['data' => $result]);
    }
    public function addUser()
    {
        if(session()->get('category') != 'OWNER'){
            return redirect()->to(base_url().'/admin');
        }
        $data = [];
        $data['validation'] = null;
        $rules = [
            // 'username' => [
            //     'label' => 'Username',
            //     'rules' => 'required|min_length[3]|max_length[25]|is_unique[users.username]',
            //     'errors' => [
            //         'is_unique' => '{field} is already exists. Try a new one!',
            //     ],
            // ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[users.email]',
                'errors' => [
                    'is_unique' => '{field} is already exists. Try a new one!',
                ],
            ],
            
            'category' => 'required',
            // 'pass' => [
            //     'label' => 'Password',
            //     'rules' => 'min_length[8]|max_length[30]',
            //     'errors' => [
            //         'required' => '{field} field is required',
            //         'min_length' => '{field} needs to be at least 8 characters long.',
            //         'max_length' => '{field} should be less than 30 characters.',
            //     ],
            // ],
            // 'cpass' => [
            //     'label' => 'Confirm Password',
            //     'rules' => 'matches[pass]',
            //     'errors' => [
            //         'required' => '{field} field is required',
            //         'min_length' => '{field} needs to be at least 8 characters long.',
            //         'max_length' => '{field} should be less than 30 characters.',
            //     ],
            // ],
            'status' => 'required',
        ];

        if ($this->request->getMethod() == 'post') {
            if($this->validate($rules)){
                $userArray = [
                    // 'username' => $this->request->getVar('username'),
                    'email' => $this->request->getVar('email'),
                    'category' => $this->request->getVar('category'),
                    'password' => $this->request->getVar('cpass'),
                    'status' => $this->request->getVar('status'),
                ];
                $result =  $this->usersModel->addUser($userArray);

                if($result){
                    session()->setFlashdata('userAdded', 'An account created successfully.');
                    return redirect()->to('admin/all-users');
                }else{
                    session()->setFlashdata('userNot', 'Sorry! Something is wrong. Try after sometime.');
                    return redirect()->to('admin/all-users');
                }
            }else{
                $data['validation'] = $this->validator;
            }
        }
        return view("admin_panel/add_user",$data);
    }
}
