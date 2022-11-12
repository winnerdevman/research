<?php

namespace App\Controllers\Auth;
use \App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        return view('auth/header')
            . view('auth/login')
            . view('auth/footer');
    }

    public function login_password_recover(){
        return view('auth/header')
        . view('auth/login_password_recover')
        . view('auth/footer');
    }

    public function login_password_reset(){
        return view('auth/header')
        . view('auth/login_password_reset')
        . view('auth/footer');
    }

    public function logout(){
        return true;
    }
}
