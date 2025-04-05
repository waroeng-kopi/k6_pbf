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

    public function sewa($id=null)
    {
        $sewaModel = new SewaModel(); // Create instance of SewaModel
        $data = [
            'title' => 'Sewa Mobil',
            'isi_sewa' => $sewaModel->orderBy('sewaId DESC')->findAll(),
            // Retrieve data from database
            'sewa_obj' => $sewaModel->where('sewaId', $id)->first()
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

    public function create()
    {
        $sewaModel = new SewaModel();
        $data = [
            'namaMobil' => $this->request->getVar('namaMobil'),
            'penyewa' => $this->request->getVar('penyewa'),
            'jamSewa' => $this->request->getVar('jamSewa'),
        ];
        $sewaModel->insert($data);
        return $this->response->redirect(base_url('sewa'));
    }

    // public function 
}
