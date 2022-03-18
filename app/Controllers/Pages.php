<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function tentang()
    {
        $data = [
            'title' => 'Tentang - LPK/LKP INDERA'
        ];
        return view('landing/pages/tentang', $data);
    }
    public function struktur()
    {
        $data = [
            'title' => 'Struktur Organisasi - LPK/LKP INDERA'
        ];
        return view('landing/pages/struktur', $data);
    }
    public function visimisi()
    {
        $data = [
            'title' => 'Visi Misi - LPK/LKP INDERA'
        ];
        return view('landing/pages/visimisi', $data);
    }
    public function akreditasi()
    {
        $data = [
            'title' => 'Akreditasi & Perijinan - LPK/LKP INDERA'
        ];
        return view('landing/pages/akreditasi', $data);
    }
    public function sarana()
    {
        $data = [
            'title' => 'Sarana dan Prasarana - LPK/LKP INDERA'
        ];
        return view('landing/pages/sarana', $data);
    }

    public function whatsapp()
    {
        $data = [
            'title' => 'Whatsapp - LPK/LKP INDERA'
        ];
        return view('landing/pages/whatsapp', $data);
    }
    public function faq()
    {
        $data = [
            'title' => 'FAQ - LPK/LKP INDERA'
        ];
        return view('landing/pages/faq', $data);
    }
}