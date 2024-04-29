<?php

namespace App\Models;

use CodeIgniter\Model;

class SewaModel extends Model
{
    protected $table      = 'tb_sewa';
    protected $primaryKey = 'sewaId';

    protected $allowedFields = ['sewaId', 'namaMobil', 'penyewa', 'jamSewa'];
}
