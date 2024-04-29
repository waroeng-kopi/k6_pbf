<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' =>  'Home',
        ];
        return view('v_home', $data);
    }

    public function sewa()
    {
        $data = [
            'title' =>  'Sewa Mobil',
        ];
        return view('v_sewa', $data);
    }

    public function mobil()
    {
        $data = [
            'title' =>  'Daftar Mobil',
        ];
        return view('v_mobil', $data);
    }
}
