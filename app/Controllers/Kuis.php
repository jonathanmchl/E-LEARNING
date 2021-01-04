<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Kuis extends Controller {
    public function index()
	{
        $data = [
            'nama'=>session()->get('user_name')
        ];
		return view('admin/kuis', $data);
    }
        
    public function nilai()
	{
        $data = [
            'nama'=>session()->get('user_name')
        ];
		return view('admin/nilaikuis', $data);
	} 
}
