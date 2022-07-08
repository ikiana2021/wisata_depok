<?php
    namespace App\Controllers;

    class Admins extends BaseController{
        public function __construct(){
            $this->session = session();
        }
        public function index(){
            if (!$this->session->has('LogginNow')) {
                    return redirect()->to('/auth/login');
            }
            if ($this->session->get('role') != "administrator"){
                    return redirect()->to(base_url());
            }
            return view('admins/index');
        }
    }