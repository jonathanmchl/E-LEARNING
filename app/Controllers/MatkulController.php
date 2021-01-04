<?php

namespace App\Controllers;

use App\Models\MatkulModel;

class MatkulController extends BaseController
{
    protected $matkulModel;
    public function __construct()
    {
        $this->matkulModel = new MatkulModel(); //instansiasi
    }
    public function index()
    {
        $data = [
            'title' => 'Daftar matkul',
            'matkul' => $this->matkulModel->getMatkulController(),
            'nama'=>session()->get('user_name')
        ];
        return view('admin/tambahmatkul', $data);
    }

    // public function detail($id)
    // {
    //     $data = [
    //         'title' => 'Detail matkul',
    //         'matkul' => $this->matkulModel->getMatkulController()
    //     ];

    //     return view('admin/detail', $data);
    // }
    public function create()
    {
        $data = [
            'title' => 'Detail matkul',
            'matkul' => $this->matkulModel->getMatkulController(),
            'nama'=>session()->get('user_name')
        ];
        return view('admin/create', $data);
    }
    public function save() //mengelola data yang dikirim dari create untuk di insert ke dalam table
    {
        $this->matkulModel->save([
            'kategori' => $this->request->getVar('kategori'),
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'kelas' => $this->request->getVar('kelas'),
            'pengajar' => $this->request->getVar('pengajar'),
            'nama'=>session()->get('user_name')
        ]);

        session()->setFlashData('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/MatkulController');
    }

    public function delete($id)
    {

        $this->matkulModel->delete($id);
        session()->setFlashData('pesan', 'Data berhasil dihapus');
        return redirect()->to('/MatkulController');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Ubah Data',
            'matkul' => $this->matkulModel->getMatkulController($id)
        ];
        return view('admin/edit', $data);
    }
    public function update($id)
    {
        $this->matkulModel->save([
            'id' => $id,
            'kategori' => $this->request->getVar('kategori'),
            'nama_matkul' => $this->request->getVar('nama_matkul'),
            'kelas' => $this->request->getVar('kelas'),
            'pengajar' => $this->request->getVar('pengajar'),
            'nama'=>session()->get('user_name')
        ]);

        session()->setFlashData('pesan', 'Data berhasil diubah');
        return redirect()->to('/MatkulController');
    }
}
