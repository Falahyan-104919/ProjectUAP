<?php

namespace App\Controllers;

class SimpanPinjam extends BaseController
{
    public function index()
    {
        $data['judul'] = 'Daftar Simpanan Anggota | Koperasi HIMAKOM';

        echo view ('template/header', $data);
        echo view ('simpan/index');
        echo view ('template/footer');
    }
    
    public function tambahsimpanan()
    {
        $data['judul'] = 'Form Tambah Simpanan Koperasi Himakom | Koperasi HIMAKOM';

        echo view ('template/header', $data);
        echo view ('simpan/tambahsimpanan');
        echo view ('template/footer');
    }

    public function daftarpinjaman()
    {
        $data['judul'] = 'Daftar Pinjaman Koperasi Himakom | Koperasi HIMAKOM';

        echo view ('template/header', $data);
        echo view ('pinjam/index');
        echo view ('template/footer');
    }

    public function tambahpinjaman()
    {
        $data['judul'] = 'Form Tambah Pinjaman Koperasi Himakom | Koperasi HIMAKOM';

        echo view ('template/header', $data);
        echo view ('pinjam/tambahpinjaman');
        echo view ('template/footer');
    }
}
