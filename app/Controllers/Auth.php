<?php
    namespace App\Controllers;
    use App\Models\UsersModel;

    class Auth extends BaseController{
        public function __construct(){
            $this->UsersModel = new UsersModel();
            $this->validation = \Config\Services::validation();
            $this->session = \Config\Services::session();
        }

        public function login(){
            return view('auth/login');
        }

        public function register(){
            return view('auth/register');
        }

        public function valid_register(){
            $data = $this->request->getPost();
            // $this->validation->run($data, 'register');
            $errors = $this->validation->getErrors();

            if ($errors) {
                session()->setFlashdata('error',$errors);
                return redirect()->to('/auth/register');
            }
            $public = 'public';
            $password = md5($data['password']);
            $this->UsersModel->save([
                'username' => $data['username'],
                'password' => $password,
                'email' => $data['email'],
                'status' => 1,
                'role' => $public
            ]);

            session()->setFlashData('login','Anda berhasil mendaftar, silakan login');
            return redirect()->to('/auth/login');
        }

        public function valid_login(){
            $data = $this->request->getPost();
            $user = $this->UsersModel->where('email', $data['email'])->first();

            if($user){
                if($user['password'] != md5($data['password'])){
                    session()->setFlashdata('password', 'Password salah');
                    return redirect()->to('/auth/login');
                }else{
                    if($user['status'] != 1){
                        session()->setFlashdata('status','Status anda belum aktif');
                        return redirect()->to('/auth/login');
                    }else{
                        $sessLogin = [
                            'LogginNow' => true,
                            'id' => $user['id'],
                            'email' => $user['email'],
                            'username' => $user['username'],
                            'role' => $user['role']
                        ];
                        $this->session->set($sessLogin);
                        if($user['role'] != 'administrator'){
                            return redirect()->to(base_url());
                        }else{
                            return redirect()->to(base_url('/admins/index'));
                        }
                        
                    }
                    
                }
            }
        }

        public function logout(){
            $this->session->destroy();
            return redirect()->to('/auth/login');
        }
    }