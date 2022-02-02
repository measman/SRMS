<?php

namespace App\Controllers;

use \App\Libraries\Hash;
use \App\Models\UserModel;

class Home extends BaseController
{
    public $usermodel;
    public function __construct()
    {
        
        $this->usermodel = new UserModel();
    }
    public function index()
    {
        if (session()->has('userdata')) {

            if (!session()->get('userdata')['logged_in']) {
                return redirect()->route('login');
            } else {                  
                return view('admin/dashboard');                 
            }
        } else {
            return redirect()->route('home');
        }
        
    }
    public function login_page(){
        return view('admin-login');
    }
    public function home(){
        return view('home');
    }

    function check()
    {

        $rules = [
            'username' => [
                'rules' => 'required|is_not_unique[admin.UserName]',
                'errors' => [
                    'required' => 'Username is required',
                    'is_not_unique' => 'This username is not registered in our company.'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password is required'
                ]
            ]
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            return view('admin-login', $data);
        } else {
            $un = $this->request->getVar('username');
            $pw = $this->request->getVar('password');
            $user_info = $this->usermodel->where('UserName', $un)->first();
            $check_password = Hash::check($pw, $user_info['Password']);

            // $check_login=$this->homemodel->logindata($un,$pw);
            if ($check_password) {
                // print_r($check_login);
               
                    
                        $data = array(
                            'logged_in'  =>  TRUE,
                            'username' => $user_info['UserName'],
                            'userid' => $user_info['id']
                        );
                        
                        session()->set('userdata', $data);
                       
                        return redirect()->to(base_url());
                    
            } else {
                session()->setTempdata('login_error', 'Please check your username or password and try again.', 3);
                return redirect()->route('login')->withInput();
            }
        }
    }

    public function logout()
    {
        if (session()->has('userdata')) {

            $data = session()->get('userdata');
            $data['logged_in'] = false;
                session()->destroy();
            
                return redirect()->route('login');
        } else {
            return redirect()->route('login');
        }
    }
}