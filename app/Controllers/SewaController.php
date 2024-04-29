<?php

namespace App\Controllers;

use App\Models\SewaModel;

class SewaController extends BaseController
{
    public function index()
    {
        $sewaModel = new SewaModel();
        $data['sewa'] = $sewaModel->findAll();

        return view('sewa/index', $data);
    }
}
