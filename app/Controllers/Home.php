<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Home | Koperasi HIMAKOM';

        return view('home/home', $data);
    }
}
