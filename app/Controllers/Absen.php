<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Absen extends Controller {
    public function index()
	{
		$data = [
            'nama'=>session()->get('user_name')
        ];
		return view('user/absensi', $data);
	}    
}