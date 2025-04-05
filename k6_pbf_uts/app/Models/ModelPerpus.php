<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPerpus extends Model
{
    protected $table            = 'data_buku';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['kategori', 'gambar', 'judul','pengarang','penerbit','isbn'];

}
