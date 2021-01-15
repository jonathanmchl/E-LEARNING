<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AbsensiModel;

class Absen extends Controller
{
	public function __construct()
	{
		$this->absensiModel = new AbsensiModel(); //instansiasi
	}
	public function index()
	{
		$data = [
			'nama' => session()->get('user_name')
		];
		return view('user/absensi', $data);
	}
	

	public function save() //mengelola data yang dikirim dari create untuk di insert ke dalam table
	{
		$this->absensiModel->save([
			'nama' => $this->request->getVar('nama'),
			'npm' => $this->request->getVar('npm'),
			'keterangan' => $this->request->getVar('keterangan')
		]);

		session()->setFlashData('pesan', 'Absen berhasil ditambahkan');
		return redirect()->to('/Absen');
	}

	public function admin()
	{
		$data = [
            'nama'=>session()->get('user_name')
        ];
		return view('admin/absensi', $data);
	}

}