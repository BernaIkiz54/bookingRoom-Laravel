<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kullanici;
use Illuminate\Support\Facades\Hash;//hash sınıfını kullanabilmek için facades kütüphanesini çağırdık.
use Illuminate\Support\Str;//Aktivasyon anahtarını str random dosyasından oluşturabilmek için bu kütüphaneyi kullandım.


class KullaniciController extends Controller
{
    public function showSignIn()
    {
        return view('kullanici.Login');
    }
    public function  showSignUp(){
        return view('kullanici.Signup');
    }
    public function  kaydol(){
        $kullanici =Kullanici::create([
            'ad'=>request('ad'),
            'soyad'=>request('soyad'),
            'email'=>request('email'),
            'sifre'=>Hash::make(request('sifre')),
            'aktivasyon_anahtari'=>str::random(60),
            'aktif_mi'=>0,
        ]);
        //Sisteme giriş işlemini otomatik olarak gerçekleştiricez.Auth fonkiyonu içerisindeki login komutunu kullanarak gerçekleştiriyoruz
        auth()->login($kullanici);
        return redirect()->route('Odalar');
    }
}
