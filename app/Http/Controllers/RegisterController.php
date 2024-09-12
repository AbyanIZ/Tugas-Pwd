<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        // Mengembalikan tampilan halaman profil
        return view('register');
    }
}
