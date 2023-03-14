<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    
    function login()
    {
        return view('session/login');
    }

    function auth(Request $request)
    {
        # code...
    }
}
