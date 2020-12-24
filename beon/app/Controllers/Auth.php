<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function logout()
	{
		session()->destroy();
		return redirect()->to('/login');
	}

	public function index()
	{
		if(session()->get('logged_in')){
			if(session()->get('user_level') == 1){
				echo view('admin/pageadmin');
			} else {
				echo view('user/pageuser');
			}
		} else {
			return redirect()->to('/login');
		}
}



}
	

	
	//--------------------------------------------------------------------


