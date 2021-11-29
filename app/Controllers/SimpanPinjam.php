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
        session();
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
            $SimpananModel -> save($data);
            session()->setFlashData('pesan', 'Simpanan Behasil Ditambahkan.');
            return redirect()->to(base_url('simpanpinjam'));

        }else{

            return redirect()->to(base_url('simpanpinjam/tambahsimpanan'))->withInput()->with('validation', $this->validator);

        }

    }

    public function editsimpanan($id){
        session();
        $data = [
            'judul' => 'Edit Anggota | Koperasi HIMAKOM',
            'validation' => \Config\Services::validation(),
            'simpanan' => $this->SimpananModel->getSimpanan($id),
        ];

        return view('simpan/edit', $data);
    }

    public function updatesimpanan($id){
        session();
        $valid = $this->validate([
            "nama" =>[
                'label' => "Nama",
                'rules' => "required",
                'error' => [
                    "required" => "{field} Harus Diisi!",
                ]
            ],
            "jumlah_simpanan" =>[
                'label' => "Jumlah Simpanan",
                'rules' => "required|numeric",
                'error' => [
                    'required' => "{field} Harus Diisi!",
                    'numeric' => "{field} Tidak Boleh Selain Angka!",
                ]
            ],
        ]);

        if($valid){
            $data = [
                'id_simpanan' => $id,
                'nama' => $this->request->getVar('nama'),
                'jumlah_simpanan' => $this->request->getVar('jumlah_simpanan')
            ];

            $SimpananModel = model('SimpananModel');
            $SimpananModel -> save($data);
            session()->setFlashData('pesan', 'Data berhasil di Ubah');
            return redirect() -> to(base_url('simpanpinjam'));
        }else{
            return redirect()->to(base_url('/simpanpinjam/editsimpanan/'.$this->request->getVar('id_simpanan')))->withInput()->with('validation', $this->validator);
        }

    }

    public function deletesimpanan($id){
        $this->SimpananModel->delete($id);
        session()->setFlashData('pesan','Data Berhasil Dihapus');
        return redirect()->to('/simpanpinjam');
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

            $PinjamanModel = model("PinjamanModel");
            $PinjamanModel -> save($data);
            return redirect()->to(base_url('simpanpinjam/daftarpinjaman'));

        }else{

            return redirect()->to(base_url('simpanpinjam/tambahpinjaman'))->withInput()->with('validation', $this->validator);

        }
    }

    public function editpinjaman($id){
        session();
        $data = [
            'judul' => 'Edit Anggota | Koperasi HIMAKOM',
            'validation' => \Config\Services::validation(),
            'pinjaman' => $this->PinjamanModel->getPinjaman($id),
        ];

        return view('pinjam/edit', $data);
    }

    public function updatepinjaman($id){
        session();
        $valid = $this->validate([
            "nama" =>[
                'label' => "Nama",
                'rules' => "required",
                'error' => [
                    "required" => "{field} Harus Diisi!",
                ]
            ],
            "jumlah_pinjaman" =>[
                'label' => "Jumlah Pinjaman",
                'rules' => "required|numeric",
                'error' => [
                    'required' => "{field} Harus Diisi!",
                    'numeric' => "{field} Tidak Boleh Selain Angka!",
                ]
            ],
            "alasan_pinjam" =>[
                'label' => "Alasan Pinjaman",
                'rules' => "required",
                'error' => [
                    'required' => "{field} Harus Diisi!",
                ]
            ],
        ]);

        if($valid){
            $data = [
                'id_pinjaman' => $id,
                'nama' => $this->request->getVar('nama'),
                'jumlah_pinjaman' => $this->request->getVar('jumlah_pinjaman'),
                'alasan_pinjam' => $this->request->getVar('alasan_pinjam')
            ];

            $PinjamanModel = model('PinjamanModel');
            $PinjamanModel -> save($data);
            session()->setFlashData('pesan', 'Data berhasil di Ubah');
            return redirect() -> to(base_url('/simpanpinjam/daftarpinjaman'));
        }else{
            return redirect()->to(base_url('/simpanpinjam/editpinjaman/'.$this->request->getVar('id_pinjaman')))->withInput()->with('validation', $this->validator);
        }

    }

    public function deletepinjaman($id){
        $this->PinjamanModel->delete($id);
        session()->setFlashData('pesan', 'Pinjaman Berhasil Di-Lunasi');
        return redirect()->to('/simpanpinjam/daftarpinjaman');
    }

}
