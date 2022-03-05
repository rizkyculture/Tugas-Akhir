<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'LPK-LKP INDERA';
        // dd($data);
        return view('landing/index', $data);
    }
}