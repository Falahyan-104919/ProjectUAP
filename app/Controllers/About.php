<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data['judul'] = 'About | Koperasi HIMAKOM';

        return view ('about/index', $data);
    }
    
    public function Anggota()
    {
        $data['judul'] = 'About Anggota | Koperasi HIMAKOM';

        return view ('about/anggota', $data);
    }
}
