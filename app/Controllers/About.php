<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data['judul'] = 'About | Koperasi HIMAKOM';

        echo view ('template/header', $data);
        echo view ('about/index');
        echo view ('template/footer');
    }
    
    public function Anggota()
    {
        $data['judul'] = 'About Anggota | Koperasi HIMAKOM';

        echo view ('template/header', $data);
        echo view ('about/anggota');
        echo view ('template/footer');
    }
}
