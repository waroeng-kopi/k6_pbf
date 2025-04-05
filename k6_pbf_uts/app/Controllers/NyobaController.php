<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelMahasiswa;
use CodeIgniter\HTTP\ResponseInterface;

class NyobaController extends BaseController
{
    public function tampil_utama() //nama function yg dipanggil di routes
    {
        return view('beranda'); // nama file yg ditampilkan
    }

    //tampilkan pembacaan db
    public function tampildatamhs()
    {
        $db_mhs = new ModelMahasiswa();
        $data = [
            'isi_db' => $db_mhs -> paginate(50,'abc'), //memanggil data
            'linkhalaman'=>$db_mhs -> pager
        ];
       
        //menampilkan database ke view
        return view('datamahasiswa', $data); // nama file
        //data akan ditangkap dan dilemparkan ke view
    }

    //controller untuk tambah data
    public function tambahdatamhs()
    {
        $db_mhs = new ModelMahasiswa();
        $data = [                           //data dari tabel database
            'nisn' => $this->request->getVar('fm_nisn'), //getVar untuk mengambil variabel atau name dari input
            'nama_siswa' => $this->request->getVar('fm_nama_siswa'),
            'jenis_kelamin' => $this->request->getVar('fm_jenis_kelamin'),
            'kota' => $this->request->getVar('fm_kota'),
            'tanggal_lahir' => $this->request->getVar('fm_tanggal_lahir'),
            'telp_ortu' => $this->request->getVar('fm_telp_ortu')
        ];

        //untuk insert
        $db_mhs -> insert($data);


        return redirect() -> to(base_url('viewdatamhs')); //jika ada penambahan akan ngeroutes ke viewdatamhs
       
    }

    //controller untuk hapus data
    public function hapusdatamhs()
    {
        $db_mhs = new ModelMahasiswa();
        $nisn = $this -> request -> getVar('fm_nisn_sembunyi');
        $db_mhs -> delete($nisn);
        return redirect() -> to(base_url('viewdatamhs'));
       
    }
    
    //controller untuk update data
    public function ubahdatamhs() 
    {
        $db_mhs = new ModelMahasiswa();
        $nisn = $this -> request -> getVar('fm_nisn');

        $data = [                           //data dari tabel database
            'nisn' => $this->request->getVar('fm_nisn'), //getVar untuk mengambil variabel atau name dari input
            'nama_siswa' => $this->request->getVar('fm_nama_siswa'),
            'jenis_kelamin' => $this->request->getVar('fm_jenis_kelamin'),
            'kota' => $this->request->getVar('fm_kota'),
            'tanggal_lahir' => $this->request->getVar('fm_tanggal_lahir'),
            'telp_ortu' => $this->request->getVar('fm_telp_ortu')
        ];

        //untuk insert
        $db_mhs -> update($nisn, $data);


        return redirect() -> to(base_url('viewdatamhs')); //jika ada penambahan akan ngeroutes ke viewdatamhs
       
    }
    
}
