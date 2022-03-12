<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'LPK/LKP INDERA - Kursus Mengemudi Terbaik di Magelang';
        return view('landing/index', $data);
    }
}