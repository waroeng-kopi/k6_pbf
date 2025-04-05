<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKelas extends Model
{
    protected $table            = 'kelas';
    protected $primaryKey       = 'nama_kelas';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
   
    protected $protectFields    = true;
    protected $allowedFields    = ['nip', 'jumlah_siswa'];

}
