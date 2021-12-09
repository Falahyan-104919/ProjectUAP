<?php

namespace App\Controllers;

use App\Models\AnggotaModel;


class Home extends BaseController
{

    protected $AnggotaModel;
    
    public function __construct(){
        $this->AnggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Home | Koperasi HIMAKOM',
            // 'anggota' => $this->AnggotaModel->getAnggota($id)
        ];

        return view('home/home', $data);
    }
}
