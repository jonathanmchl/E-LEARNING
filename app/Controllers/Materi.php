<?php

namespace App\Controllers;

use App\Models\MaterikuliahModel;

class Materi extends BaseController
{
    protected $materikuliahModel;
    public function __construct()
    {
        $this->materikuliahModel = new MaterikuliahModel(); //instansiasi
    }

    public function index()
    {
        $data = [
            'nama' => session()->get('user_name')
        ];
        return view('admin/tambahmateri', $data);
    }

    public function save() //mengelola data yang dikirim dari create untuk di insert ke dalam table
    {
        $this->materikuliahModel->save([
            'bab' => $this->request->getVar('bab'),
            'judul' => $this->request->getVar('judul'),
            'penjelasan' => $this->request->getVar('penjelasan'),
            'file' => $this->request->getVar('file'),
        ]);

        session()->setFlashData('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/Materi');
    }



    public function detmat()
    {
        $data = [
            'nama' => session()->get('user_name'),
            'materikuliah' => $this->materikuliahModel->getMaterikuliah()
        ];
        return view('user/detailmateri', $data);
    }
    public function kuis()
    {
        $data = [
            'nama' => session()->get('user_name')
        ];
        return view('user/detailkuis', $data);
    }
}