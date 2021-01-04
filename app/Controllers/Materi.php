<?php

namespace App\Controllers;

use App\Models\MatkulModel;

class Materi extends BaseController
{
   
    public function index()
    {
        $data = [
            'nama'=>session()->get('user_name')
        ];
        return view('admin/tambahmateri', $data);
    }
    public function detmat()
    {
        $data = [
            'nama'=>session()->get('user_name')
        ];
        return view('user/detailmateri', $data);
    }
    public function kuis()
    {
        $data = [
            'nama'=>session()->get('user_name')
        ];
        return view('user/detailkuis', $data);
    }
   
}
