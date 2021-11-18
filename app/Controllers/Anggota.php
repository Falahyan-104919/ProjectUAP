<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class Anggota extends BaseController
{
    
    protected $AnggotaModel;
    
    public function __construct(){
        $this->AnggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $AnggotaModel = model("AnggotaModel");
        $data = [
            'judul' => 'Daftar Anggota | Koperasi HIMAKOM',
            'anggota' => $AnggotaModel->findAll()
        ];

        return view ('anggota/index', $data);
    }
    
    public function tambah()
    {
        session();
        $data['judul'] = 'Tambah Anggota | Koperasi HIMAKOM';
        $data['validation'] = \Config\Services::validation();

        return view ('anggota/tambah', $data);
    }

    public function store() {
        $valid = $this-> validate([
            "nama" =>[
                'label' => "Nama",
                'rules' => "required",
                'error' => [
                    "required" => "{field} Harus Diisi!",
                ]
            ],
            "no_hp" =>[
                'label' => "Nomor Handphone",
                'rules' => "required|numeric",
                'error' => [
                    'required' => "{field} Harus Diisi!",
                    'numeric' => "{field} Tidak Boleh Selain Angka!",
                ]
            ],
            "alamat" => [
                'label' => "Alamat",
                'rules' => "required",
                'error' => [
                    'required' => "{field} Harus Diisi!",
                ]
            ],
            "gender" => [
                'label' => "Gender",
                'rules' => 'required',
                'error' => [
                    'required' => "{field} Harus Diisi!",
                ]
            ]
        ]);

    if($valid){
        $data = [
            'nama' => $this->request->getVar('nama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'gender' => $this->request->getVar('gender')
        ];

        $AnggotaModel = model('AnggotaModel');
        $AnggotaModel -> insert($data);
        return redirect() -> to(base_url('anggota'));
    }else{
        return redirect()->to(base_url('anggota/tambah'))->withInput()->with('validation', $this->validator);
    }

    }
}
