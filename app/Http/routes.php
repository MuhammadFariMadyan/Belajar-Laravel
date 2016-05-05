<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//route buku
Route::get('/buku', 'BukuController@index');

//route mahasiswa
Route::get('/mahasiswa', 'MahasiswaController@index');

//route peminjaman
Route::get('/peminjaman', 'PeminjamanController@index');