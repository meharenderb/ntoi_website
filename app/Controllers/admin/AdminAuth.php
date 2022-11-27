<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdminAuthModel;

class AdminAuth extends BaseController
{
    public $session;
    public function __construct()
    {
        helper(["form","url"]);
        $this->adminAuth = new AdminAuthModel();
        $this->session = session();
    }
    public function index()
    {
        $data = [];
        $data['validation'] = null;
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => "required|valid_email",
                'password' => "required|min_length[4]|max_length[16]"
            ];

            if ($this->validate($rules)) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');

                $userdata = $this->adminAuth->authenticateAdminEmail($email);

                if ($userdata) {
                    // echo md5($password) === $userdata['password'];exit;
                    if (md5($password) === $userdata['password']) {
                        if ($userdata['status'] === 'ACTIVE') {
                            $activateSession = [
                                'username' => $userdata['username'],
                                'email' => $userdata['email'],
                                'id' => $userdata['id'],
                                'category' => $userdata['category']
                            ];
                            $this->session->set($activateSession);
                            return redirect()->to(base_url() . '/admin/view-all-performers');
                        } else {
                            $this->session->setFlashdata('error', 'Ask admin to activate your account.', 3);
                            // return redirect()->to(current_url());
                        }
                    } else {
                        $this->session->setFlashdata('error', 'Sorry! Wrong password entered for that email', 3);
                        // return redirect()->to(current_url());
                    }
                } else {
                    $this->session->setFlashdata('error', 'Sorry! Email doesn\'t exists', 3);
                    // return redirect()->to(current_url());
                }
            } else {
                session()->remove('error');
                session()->destroy();
                $data['validation'] = $this->validator;
            }
        }
        return view('admin_panel/login_view', $data);
    }
}
