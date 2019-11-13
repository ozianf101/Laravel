<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function home()
    {
        return view('layout.home');
    }
    public function tentang()
    {
        return view('layout.tentang');
    }
    public function kontak()
    {
        return view('layout.kontak');
    }
}
