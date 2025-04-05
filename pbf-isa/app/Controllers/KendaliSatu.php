<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class KendaliSatu extends BaseController
{
    public function index()
    {
        echo 'ini dari controller<br><br>';

        for ($i=1; $i <= 10; $i++) { 
            echo $i . ". Nama saya adam<br>";
        }
    }

    public function tampil()
    {
        $data[] = [
            'judul' => 'Menu berbuka puasa'
        ];
        return view('halaman', $data['informasi']);
    }
}
