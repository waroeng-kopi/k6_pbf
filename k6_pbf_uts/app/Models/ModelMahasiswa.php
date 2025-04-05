<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    protected $table            = 'siswa';
    protected $primaryKey       = 'nisn';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
   
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_siswa', 'jenis_kelamin', 'kota', 'tanggal_lahir', 'telp_ortu'];

}
