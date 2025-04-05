<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function __construct() {
        helper('form');
    }
    public function index(): string
    {
        $data = [
            'judul' =>  'Login',
            'page'  =>  'v_login',
        ];
        return view('v_template_login', $data);
    }

    public function CekLoginAdmin()
    {
        
    }

    public function LoginAdmin()
    {
        $data = [
            'judul' =>  'Login Admin',
            'page'  =>  'v_login_admin',
        ];
        return view('v_template_login', $data);
    }
}
