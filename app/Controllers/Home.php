<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Home | Koperasi HIMAKOM';

        echo view ('template/header', $data);
        echo view ('home/home');
        echo view ('template/footer');
    }
}
