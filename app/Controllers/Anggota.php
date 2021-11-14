<?php

namespace App\Controllers;

class Anggota extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Daftar Anggota | Koperasi HIMAKOM';

        echo view ('template/header', $data);
        echo view ('anggota/index');
        echo view ('template/footer');
    }
    
    public function tambah()
    {
        $data['judul'] = 'Tambah Anggota | Koperasi HIMAKOM';

        echo view ('template/header', $data);
        echo view ('anggota/tambah');
        echo view ('template/footer');
    }
}
