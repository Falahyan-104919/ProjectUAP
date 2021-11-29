<?php

namespace App\Models;

use CodeIgniter\Model;

class SimpananModel extends Model
{
    protected $table            = 'simpanan';
    protected $primaryKey       = 'id_simpanan';
    protected $allowedFields    = ['nama', 'jumlah_simpanan', 'metode'];
    protected $useTimestamps = false;

    public function getSimpanan($id = false){
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id_simpanan' => $id])-> first();
    }

}
