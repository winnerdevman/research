<?php

namespace App\Controllers\Auth;
use \App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $return = $this->checkAuth();
        if ($return ){
            return redirect()->to($return);
        }

        return view('auth/header')
            . view('auth/login')
            . view('auth/footer');
    }

    public function login_password_recover(){
        $return = $this->checkAuth();
        if ($return ){
            return redirect()->to($return);
        }

        return view('auth/header')
        . view('auth/login_password_recover')
        . view('auth/footer');
    }

    public function login_password_reset(){
        $return = $this->checkAuth();
        if ($return ){
            return redirect()->to($return);
        }
        
        return view('auth/header')
        . view('auth/login_password_reset')
        . view('auth/footer');
    }

    public function logout(){
        $this->session->remove("user"); 
        return redirect()->to(base_url("auth/login"));
    }

    public function login_request(){
        $request = \Config\Services::request();
        extract($request->getPost());

        $user = $this->user_model->getUser($username, $password);
        $result = ["status"=> "success"];
        if ($user){
            $this->session->set("user", $user);
        }else{
            $result["status"] = "failed";
        }
        echo json_encode($result);
    }

    public function send_forgot_email(){
        $request = \Config\Services::request();
        extract($request->getPost());
        $result = ["status"=> "success", "email"=> $email];

        $email = \Config\Services::email();

        $email->setFrom('bensch8920@gmail.com', 'Your Name');
        $email->setTo('winwilust@gmail.com');

        $email->setSubject('Email Test11');
        $email->setMessage('Testing the email class.');

        if (! $email->send()) {
            $result["status"] = "1111";
        }else{
            $result["status"] = "2222";
        }
        print_r($email);
        echo json_encode($result);
    }
}
