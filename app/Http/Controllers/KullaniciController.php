<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KullaniciController extends Controller
{
    public function showSignIn()
    {
        return view('kullanici.Login');
    }
    public function  showSignUp(){
        return view('kullanici.Signup');
    }
}
