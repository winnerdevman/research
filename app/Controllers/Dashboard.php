<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $return = $this->checkAuth();
        if ($return ){
            return redirect()->to($return);
        }
        return
            view("layout/header") . 
            view('dashboard') .
            view("layout/footer");
    }
}
