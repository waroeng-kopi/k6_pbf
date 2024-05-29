<?php

namespace App\Models;

use CodeIgniter\Model;

class SewaModel extends Model
{
    protected $table            = 'tb_sewa';
    protected $primaryKey       = 'sewaId';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $protectFields    = true;
    
    protected $allowedFields    = ['namaMobil', 'penyewa', 'jamSewa'];
}
