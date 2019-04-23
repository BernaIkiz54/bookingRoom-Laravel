<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','AnasayfaController@show')->name('giris');
Route::get('/Odalar','OdalarController@show')->name('Odalar');
Route::group(['prefix'=>'kullanici'],function(){
    Route::get ('/signin','KullaniciController@showSignIn')->name('signin');
    Route::post('/signin','KullaniciController@giris');
    Route::get ('/signup','KullaniciController@showSignUp')->name('signup');
    Route::post ('/signup','KullaniciController@kaydol');
    Route::get('aktiflestir/{anahtar}','KullaniciController@aktiflestir')->name('aktiflestir');
    Route::post('/signout','KullaniciController@signout')->name('kullanici.signout');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('Odalar', 'OdalarController');
    Route::get('profil', 'ProfilController@profil')->name('profil');
    Route::post('profil', 'ProfilController@guncelle')->name('profil.guncelle');
});

Route ::get('/test/mail',function(){
    $kullanici=\App\Kullanici::find(1);
    return new App\Mail\KullaniciKayitMail($kullanici);
});