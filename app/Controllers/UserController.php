<?php

namespace App\Controllers;


class UserController extends BaseController
{
    public function index()
    {
        $data = [
            'nama'=>session()->get('user_name')
        ];
        return view('user/detailmatkul',$data);
    }
    //--------------------------------------------------------------------

}
