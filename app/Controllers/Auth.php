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
		 $data = [

            'nama'=>session()->get('user_name')
        ];
		if (session()->get('logged_in')) {
			if (session()->get('user_level') == 1) {
				echo view('admin/pageadmin',$data);
			} else {
				$model = new MatkulModel();
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
