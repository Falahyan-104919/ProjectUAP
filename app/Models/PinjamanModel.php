<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamanModel extends Model
{

    protected $table            = 'pinjaman';
    protected $primaryKey       = 'id_pinjaman';
    protected $allowedFields    = ['nama', 'jumlah_pinjaman', 'alasan_pinjam'];
    protected $useTimestamps = false;
    
    public function getPinjaman($id = false){
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id_pinjaman' => $id])-> first();
    }

}
