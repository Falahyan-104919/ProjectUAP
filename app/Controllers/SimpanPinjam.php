<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SimpananModel;
use App\Models\PinjamanModel;

class SimpanPinjam extends BaseController
{

    protected $SimpananModel;
    protected $PinjamanModel;

    public function __construct() {
        $this->SimpananModel = new SimpananModel();
        $this->PinjamanModel = new PinjamanModel();
    }

    public function index()
    {
        $SimpananModel = model('SimpananModel');
        $data = [
            'judul' => "Daftar Simpanan Anggota | Koperasi HIMAKOM",
            'simpanan' => $SimpananModel->findAll(),
        ];

        return view ('simpan/index', $data);
    }
    
    public function tambahsimpanan()
    {
        session();
        $data = [
            'judul' => 'Form Tambah Simpanan Koperasi Himakom | Koperasi HIMAKOM',
            'validation' => \Config\Services::validation()
        ];

        return view ('simpan/tambahsimpanan', $data); 
    }

    public function storesimpanan(){
        $valid = $this->validate([
            "nama" => [    
                'label' => "Nama",
                'rules' => "required",
                'error' => [
                    "required" => "{field} Harus Diiisi!",
                ]
            ],
            "jumlah_simpanan" => [
                'label' => "Jumlah Simpanan",
                'rules' => "required|numeric",
                'error' => [
                    "required" => "{field} Harus Diisi!",
                    "numeric" => "{field} Harus Berupa Angka!",
                ]
            ],
        ]);

        if($valid){
            $data = [
                'nama' => $this->request->getVar('nama'),
                'jumlah_simpanan' => $this->request->getVar('jumlah_simpanan'),
                'metode' => $this->request->getVar('metode')
            ];

            $SimpananModel = model("SimpananModel");
            $SimpananModel -> insert($data);
            return redirect()->to(base_url('simpanpinjam'));

        }else{

            return redirect()->to(base_url('simpanpinjam/tambahsimpanan'))->withInput()->with('validation', $this->validator);

        }

    }

    public function daftarpinjaman()
    {
        $PinjamanModel = model('PinjamanModel');
        $data = [
            'judul' => 'Daftar Pinjaman Koperasi Himakom | Koperasi HIMAKOM',
            'pinjaman' => $PinjamanModel->findAll(),
        ];

        return view ('pinjam/index', $data);
    }

    public function tambahpinjaman()
    {
        session();
        $data = [
            'judul' => 'Form Tambah Pinjaman Koperasi Himakom | Koperasi HIMAKOM',
            'validation' => \Config\Services::validation()
        ];
        return view ('pinjam/tambahpinjaman', $data);
    }

    public function storepinjaman(){
        $valid = $this->validate([
            "nama" => [    
                'label' => "Nama",
                'rules' => "required",
                'error' => [
                    "required" => "{field} Harus Diiisi!",
                ]
            ],
            "jumlah_pinjaman" => [
                'label' => "Jumlah Pinjaman",
                'rules' => "required|numeric",
                'error' => [
                    "required" => "{field} Harus Diisi!",
                    "numeric" => "{field} Harus Berupa Angka!",
                ]
            ],
            "alasan_pinjam" => [
                'label' => "Alasan Pinjaman",
                'rules' => "required",
                'error' => [
                    "required" => "{field} Harus Diisi!",
                ]
            ]
        ]);

        if($valid){
            $data = [
                'nama' => $this->request->getVar('nama'),
                'jumlah_pinjaman' => $this->request->getVar('jumlah_pinjaman'),
                'alasan_pinjam' => $this->request->getVar('alasan_pinjam')
            ];

            $SimpananModel = model("PinjamanModel");
            $SimpananModel -> insert($data);
            return redirect()->to(base_url('simpanpinjam/daftarpinjaman'));

        }else{

            return redirect()->to(base_url('simpanpinjam/tambahpinjaman'))->withInput()->with('validation', $this->validator);

        }
    }

}
