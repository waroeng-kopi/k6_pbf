<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelKelas;
use CodeIgniter\HTTP\ResponseInterface;

class KelasController extends BaseController
{
    public function tampil_utama() //nama function yg dipanggil di routes
    {
        return view('beranda'); // nama file yg ditampilkan
    }

    //tampilkan pembacaan db
    public function tampildatakelas()
    {
        $db_kelas = new ModelKelas();
        $data = [
            'isi_db' => $db_kelas -> findAll() //memanggil semua data
        ];
        
        //menampilkan database ke view
        return view('datakelas', $data); // nama file
        //data akan ditangkap dan dilemparkan ke view
    }

    //controller untuk tambah data
    public function tambahdatakelas()
    {
        $db_kelas = new ModelKelas();
        $data = [                           //data dari tabel database
            'nama_kelas' => $this->request->getVar('fm_nama_kelas'), //getVar untuk mengambil variabel atau name dari input
            'nip' => $this->request->getVar('fm_nip'),
            'jumlah_siswa' => $this->request->getVar('fm_jumlah_siswa')
        ];

        //untuk insert
        $db_kelas -> insert($data);


        return redirect() -> to(base_url('viewdatakelas')); //jika ada penambahan akan ngeroutes ke viewdatakelas
        
    }

    //controller untuk hapus data
    public function hapusdatakelas()
    {
        $db_kelas = new ModelKelas();
        $nama_kelas = $this -> request -> getVar('fm_nama_kelas_sembunyi');
        $db_kelas -> delete($nip);
        
        return redirect() -> to(base_url('viewdatakelas'));
        
    }
    
    //controller untuk update data
    public function ubahdatakelas() 
    {
        $db_kelas = new ModelKelas();
        $nama_kelas = $this -> request -> getVar('fm_nip');

        $data = [                           //data dari tabel database
            'nama_kelas' => $this->request->getVar('fm_nama_kelas'), //getVar untuk mengambil variabel atau name dari input
            'nip' => $this->request->getVar('fm_nip'),
            'jumlah_siswa' => $this->request->getVar('fm_jumlah_siswa')
        ];

        //untuk insert
        $db_kelas -> update($nama_kelas, $data);


        return redirect() -> to(base_url('viewdatakelas')); //jika ada penambahan akan ngeroutes ke viewdataKelas
        
    }
}
