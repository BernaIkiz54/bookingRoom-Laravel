<?php

namespace App\Http\Controllers;
use App\Mail\KullaniciKayitMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Kullanici;
use Illuminate\Support\Facades\Hash;//hash sınıfını kullanabilmek için facades kütüphanesini çağırdık.
use Illuminate\Support\Str;//Aktivasyon anahtarını str random dosyasından oluşturabilmek için bu kütüphaneyi kullandım.


class KullaniciController extends Controller
{
    public function showSignIn()
    {
        return view('kullanici.Login');
    }
    public function giris(){
        $this->validate(request(),[
            'email'=>'required|email',
            'sifre'=>'required'
            ]);
        if(auth()->attempt(['email'=>request('email'),'password'=>request('sifre')],request()->has('benihatırla'))){
            request()->session()->regenerate();
            return redirect()->intended('/Odalar');
        }
        else{
            $errors=['email'=>'Hatalı giriş'];
            return back()->withErrors($errors);
        }
    }
    public function  showSignUp(){
        return view('kullanici.Signup');
    }
    public function  kaydol(){

        $this->validate(request(),[
            'ad'=>'required|min:5|max:30',
            'soyad'=>'required|min:1|max:30',
            'email'=>'required|email|unique:kullanici',
            'sifre'=>'required|confirmed'
        ]);
        $kullanici =Kullanici::create([
            'ad'=>request('ad'),
            'soyad'=>request('soyad'),
            'email'=>request('email'),
            'sifre'=>Hash::make(request('sifre')),
            'aktivasyon_anahtari'=>str::random(60),
            'aktif_mi'=>0,
        ]);
        Mail::to(request('email'))->send(new KullaniciKayitMail($kullanici));
        //Sisteme giriş işlemini otomatik olarak gerçekleştiricez.Auth fonkiyonu içerisindeki login komutunu kullanarak gerçekleştiriyoruz
        auth()->login($kullanici);
        return redirect()->route('Odalar');
    }
    public function aktiflestir($anahtar){
        $kullanici=kullanici::where('aktivasyon_anahtari',$anahtar)->first();
        if(!is_null($kullanici)){
            $kullanici->aktivasyon_anahtari=null;
            $kullanici->aktif_mi=1;
            $kullanici->save();
            return redirect()->to('/Odalar')
                ->with('mesaj','Kullanıcı kaydınız aktifleştirildi.')
                ->with('mesaj_tur','succes');
    }
    }
    public function signout(){
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('Odalar');
    }
}
