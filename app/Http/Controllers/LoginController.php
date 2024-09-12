<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // Mengembalikan tampilan halaman profil
        return view('login');
    }
}
