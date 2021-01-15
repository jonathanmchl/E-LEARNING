<?php

namespace App\Controllers;

use App\Models\MatkulModel;

class Auth extends BaseController
{
	public function logout()
	{
		session()->destroy();
		return redirect()->to('/login');
	}

	public function index()
	{
		$model = new MatkulModel();
		 $data = [

			'nama'=>session()->get('user_name'),
			
        ];
		if (session()->get('logged_in')) {
			if (session()->get('user_level') == 1) {
				$data['matkul'] = $model->hitung();
				$data['matkull'] = $model->hitungdosen();
				$data['matkulll'] = $model->total();
				$data['matkullll'] = $model->mata();
				echo view('admin/pageadmin',$data);
			} else {
				$data['matkul'] = $model->getMatkulController();
				// return view('user/aksesmatkul', $data);
				echo view('user/aksesmatkul', $data);
			}
		} else {
			return redirect()->to('/login');
		}
	}
}
	

	
	//--------------------------------------------------------------------