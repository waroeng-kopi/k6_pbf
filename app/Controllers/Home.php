<?php

namespace App\Controllers;

use App\Models\SewaModel; // Import the SewaModel

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',
        ];
        return view('v_home', $data);
    }

    public function sewa()
    {
        $sewaModel = new SewaModel(); // Create instance of SewaModel
        $data = [
            'title' => 'Sewa Mobil',
            'isi_sewa' => $sewaModel->findAll(), // Retrieve data from database
        ];
        return view('v_sewa', $data);
    }

    public function mobil()
    {
        // Here you can similarly handle interaction with the mobil data if you have a model for it
        $data = [
            'title' => 'Daftar Mobil',
        ];
        return view('v_mobil', $data);
    }
}
