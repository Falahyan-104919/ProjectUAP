<?php

namespace App\Controllers;
// require_once "vendor/autoload.php";

use App\Models\AnggotaModel;
use App\Models\UserModeltest;
use Myth\Auth\Models\UserModel;


class Anggota extends BaseController
{
    
    protected $AnggotaModel;
    protected $UserModel;
    
    public function __construct(){
        $this->AnggotaModel = new AnggotaModel();
        $this-> UserModel    = new UserModel();
        // $this->UserModeltest = new UserModeltest();
    }

    public function index()
    {
        
        $currentPage = $this->request->getVar('page_anggota') ? $this->request->getVar('page_anggota') : 1;
        
        $AnggotaModel = model("AnggotaModel");
        
        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $AnggotaModel->search($keyword);
        }else{
            $AnggotaModel;
        }
        
        $data = [
            'judul' => 'Daftar Anggota | Koperasi HIMAKOM',
            'anggota' => $AnggotaModel->paginate(15, 'anggota'),
            'pager' => $AnggotaModel->pager,
            'currentPage' => $currentPage
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
            'id_user' => user_id(),
            'nama' => $this->request->getVar('nama'),
            'no_hp' => $this->request->getVar('no_hp'),
            'alamat' => $this->request->getVar('alamat'),
            'gender' => $this->request->getVar('gender')
        ];

        $AnggotaModel = model('AnggotaModel');
        $AnggotaModel -> save($data);
        // $UserModel = model('UserModel');
        // user()-> insert(user()->id, ['id_anggota' => $AnggotaModel -> getInsertID()]);
        session()->setFlashData('pesan', 'Data Berhasil Di-Tambahkan');
        return redirect() -> to(base_url('anggota'));
    }else{
        return redirect()->to(base_url('anggota/tambah'))->withInput()->with('validation', $this->validator);
    }

    }

    public function detail($id){
        $data = [
            'judul' => 'Detail Anggota | Koperasi KOPERASI HIMAKOM',
            'anggota' => $this->AnggotaModel->getAnggota($id),
        ];

        return view('anggota/detail', $data);
    }

    public function delete($id){
        $this->AnggotaModel->delete($id);
        session()->setFlashData('pesan', 'Data Anggota Berhasil di Hapus.');
        return redirect()->to('/anggota');
    }

    public function edit($id){
        session();
        $data = [
            'judul' => 'Edit Anggota | Koperasi HIMAKOM',
            'validation' => \Config\Services::validation(),
            'anggota' => $this->AnggotaModel->getAnggota($id),
        ];

        return view ('anggota/edit', $data);
    }

    public function update($id){
        session();
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
                'id_anggota' => $id,
                'nama' => $this->request->getVar('nama'),
                'no_hp' => $this->request->getVar('no_hp'),
                'alamat' => $this->request->getVar('alamat'),
                'gender' => $this->request->getVar('gender')
            ];

            $AnggotaModel = model('AnggotaModel');
            $AnggotaModel -> save($data);
            // user()->update('id')
            session()->setFlashData('pesan', 'Data berhasil di Ubah');
            return redirect() -> to(base_url('anggota'));
        }else{
            return redirect()->to(base_url('/anggota/edit/'.$this->request->getVar('id_anggota')))->withInput()->with('validation', $this->validator);
        }
    }

    public function uas($id){
        $data = [
			'no_hp' => 'dihapus'
		];

		$this->AnggotaModel->update($id,$data);
        session()->setFlashData('pesan', 'Berhasil');
		return redirect()->to(base_url('/anggota'));
    }

}
