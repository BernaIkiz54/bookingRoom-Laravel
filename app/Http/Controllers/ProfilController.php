<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class ProfilController extends Controller
{
    public function profil()
    {
        $user = Auth::user();
        return view('Profil.ProfilDuzenle',compact('user'));
    }

    // update profile
    public function guncelle(Request $request)
    {
        $user = Auth::user();

        if ($request->password && $request->current_password && $request->password_confirmation) {
            if ($request->password_confirmation !== $request->password) {
                return redirect()->back()->withErrors(['password_confirmation' => "Password doesn't match!"]);
            } elseif (Hash::check($request->current_password, $user->sifre)) {
                $user->sifre = Hash::make($request->password);;
            } else {
                return redirect()->back()->withErrors(['current_password' => 'Current password is not correct']);
            }
        }
        $user->email = $request->email;
        $user->soyad= $request->lastname;
        $user->ad = $request->fullname;
        $user->aciklama= $request->description;

        $user->save();

        return redirect()->route('profil');
    }
}
