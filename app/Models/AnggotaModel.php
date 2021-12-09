<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table            = 'anggota';
    protected $primaryKey       = 'id_anggota';
    protected $allowedFields    = ['id_user','nama', 'no_hp', 'alamat', 'gender', 'created_at', 'updated_at'];
    protected $useTimestamps = false;
 
    public function getAnggota($id = false){
        if($id == false){
            return $this->findAll();
        }
        return $this->where(['id_anggota' => $id])-> first();
    }

    public function search($keyword){
        $builder = $this->table('anggota');
        $builder->like('nama', $keyword)->orLike('alamat', $keyword);
        
        return $builder;
    }

}
