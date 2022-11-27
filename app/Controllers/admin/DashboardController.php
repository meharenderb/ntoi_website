<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public $session;
    public function __construct()
    {
        $this->session = session();
    }
    public function index()
    {
        // if(!$this->session->has('email')){
        //     return redirect()->to(base_url().'/portal-login');
        // }
        return view('admin_panel/dashboard_view');
    }

    public function logout(){
        $activateSession = ['username','email','id'];
        $this->session->remove($activateSession);
        $this->session->destroy();
        return redirect()->to(base_url().'/portal-login');
    }
}
