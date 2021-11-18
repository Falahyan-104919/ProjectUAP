<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table            = 'anggota';
    protected $primaryKey       = 'id_anggota';
    protected $allowedFields    = ['nama', 'no_hp', 'alamat', 'gender'];
    protected $useTimestamps = false;
 
    public function getAnggota($id = false){
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id' => $id])-> first();
    }

}
