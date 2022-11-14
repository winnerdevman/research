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
	$is_user = $this->user_model->isUser($email);
	$user_token = md5(date("Y-m-d H:i:s"));
        if ($is_user){
            //$user_token = md5(date("Y-m-d H:i:s"));
            $token_item = $this->user_token_model->getUserTokenItem($is_user->locationUserId );
            if ($token_item ){
                $this->user_token_model->update($token_item->id, ["locationuser_key"=> $user_token, "start_time"=> date("Y-m-d H:i:s")]);
            }else{
                $this->user_token_model->insert(["locationuser_id"=> $is_user->locationUserId, "locationuser_key"=> $user_token, "start_time"=> date("Y-m-d H:i:s")]);
            }
            //$token = $this->user_token_model->generateResetPasswordToken($is_user->locationUserId);
            $smtp_email = \Config\Services::email();

            $smtp_email->setFrom('dmitrosamsonia@gmail.com', 'Dmitro');
            $smtp_email->setTo($email);

            $smtp_email->setSubject('Password Reset Request');
            $smtp_email->setMessage('Password Request, go to this url <a href="' . base_url("auth/verify_token/{$user_token}") . '" target="_blank">Reset Password</a>');

            if (! $smtp_email->send()) {
                $result["status"] = "failed";
            }
        }else{
            $result["status"] ="not exist";
        }

        echo json_encode($result);
    }
}
