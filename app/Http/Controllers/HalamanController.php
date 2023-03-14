<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    function home()
    {
        return view('halaman/home');
    }
    function berita()
    {
        return view('halaman/berita');
    }
    function Loker()
    {
        return view('halaman/loker');
    }
}
