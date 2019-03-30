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
Route::group(['prefix'=>'kullanici'],function(){
    Route::get ('/signin','KullaniciController@showSignIn')->name('signin');
    Route::get ('/signup','KullaniciController@showSignUp')->name('signup');
});
