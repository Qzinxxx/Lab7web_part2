<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman about',
            'content' => 'Ini adalaha hal yang menjelaskan ttg isi.'
        ]);
    }

    public function contact()
    {
        echo "ini hal kontak";
    }

    public function home()
    {
        return view('home', [
            'title' => 'Halaman home',
            'content' => 'Ini adalah halaman home'
        ]);
    }
}