<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGuru extends Model
{
    protected $table            = 'guru';
    protected $primaryKey       = 'nip';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
   
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_guru', 'email_guru'];

}
