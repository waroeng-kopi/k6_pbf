<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelGuru;
use CodeIgniter\HTTP\ResponseInterface;

class GuruController extends BaseController
{
    public function tampil_utama() //nama function yg dipanggil di routes
    {
        return view('beranda'); // nama file yg ditampilkan
    }

    //tampilkan pembacaan db
    public function tampildataguru()
    {
        $db_guru = new ModelGuru();
        $data = [
            'isi_db' => $db_guru -> findAll() //memanggil semua data
        ];
       
        //menampilkan database ke view
        return view('dataguru', $data); // nama file
        //data akan ditangkap dan dilemparkan ke view
    }

    //controller untuk tambah data
    public function tambahdataguru()
    {
        $db_guru = new ModelGuru();
        $data = [                           //data dari tabel database
            'nip' => $this->request->getVar('fm_nip'), //getVar untuk mengambil variabel atau name dari input
            'nama_guru' => $this->request->getVar('fm_nama_guru'),
            'email_guru' => $this->request->getVar('fm_email_guru')
        ];

        //untuk insert
        $db_guru -> insert($data);


        return redirect() -> to(base_url('viewdataguru')); //jika ada penambahan akan ngeroutes ke viewdataguru
       
    }

    //controller untuk hapus data
    public function hapusdataguru()
    {
        $db_guru = new ModelGuru();
        $nip = $this -> request -> getVar('fm_nip_sembunyi');
        $db_guru -> delete($nip);
        return redirect() -> to(base_url('viewdataguru'));
       
    }
    
    //controller untuk update data
    public function ubahdataguru() 
    {
        $db_guru = new ModelGuru();
        $nip = $this -> request -> getVar('fm_nip');

        $data = [                           //data dari tabel database
            'nip' => $this->request->getVar('fm_nip'), //getVar untuk mengambil variabel atau name dari input
            'nama_guru' => $this->request->getVar('fm_nama_guru'),
            'email_guru' => $this->request->getVar('fm_email_guru')
        ];

        //untuk insert
        $db_guru -> update($nip, $data);


        return redirect() -> to(base_url('viewdataguru')); //jika ada penambahan akan ngeroutes ke viewdataguru
       
    }
}
