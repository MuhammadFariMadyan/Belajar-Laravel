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
    return view('home');
});

//route buku
Route::get('Buku', ['middleware' => 'auth', 'uses' => 'BukuController@index']);
Route::post('CariBuku', ['middleware' => 'auth', 'uses' => 'BukuController@cariBuku']);
Route::get('TambahBuku', ['middleware' => 'auth', 'uses' => 'BukuController@tambahBuku']);
Route::post('SimpanBuku', ['middleware' => 'auth', 'uses' => 'BukuController@simpanBuku']);
Route::get('EditBuku/{idBuku}', ['middleware' => 'auth', 'uses' => 'BukuController@editBuku']);
Route::put('UpdateBuku/{idBuku}', ['middleware' => 'auth', 'uses' => 'BukuController@updateBuku']);
Route::delete('HapusBuku/{idBuku}', ['middleware' => 'auth', 'uses' => 'BukuController@hapusBuku']);

//route mahasiswa
Route::get('Mahasiswa', ['middleware' => 'auth', 'uses' => 'MahasiswaController@index']);
Route::post('CariMahasiswa', ['middleware' => 'auth', 'uses' => 'MahasiswaController@cariMahasiswa']);
Route::get('TambahMahasiswa', ['middleware' => 'auth', 'uses' => 'MahasiswaController@tambahMahasiswa']);
Route::post('SimpanMahasiswa', ['middleware' => 'auth', 'uses' => 'MahasiswaController@simpanMahasiswa']);
Route::get('EditMahasiswa/{npm}', ['middleware' => 'auth', 'uses' => 'MahasiswaController@editMahasiswa']);
Route::put('UpdateMahasiswa/{npm}', ['middleware' => 'auth', 'uses' => 'MahasiswaController@updateMahasiswa']);
Route::delete('HapusMahasiswa/{npm}', ['middleware' => 'auth', 'uses' => 'MahasiswaController@hapusMahasiswa']);

//route peminjaman
Route::get('Peminjaman', ['middleware' => 'auth', 'uses' => 'PeminjamanController@index']);
Route::post('CariPeminjaman', ['middleware' => 'auth', 'uses' => 'PeminjamanController@cariPeminjaman']);
Route::get('TambahPeminjaman', ['middleware' => 'auth', 'uses' => 'PeminjamanController@tambahPeminjaman']);
Route::post('SimpanPeminjaman', ['middleware' => 'auth', 'uses' => 'PeminjamanController@simpanPeminjaman']);
Route::get('EditPeminjaman/{idPeminjaman}', ['middleware' => 'auth', 'uses' => 'PeminjamanController@editPeminjaman']);
Route::put('UpdatePeminjaman/{idPeminjaman}', ['middleware' => 'auth', 'uses' => 'PeminjamanController@updatePeminjaman']);
Route::delete('HapusPeminjaman/{idPeminjaman}', ['middleware' => 'auth', 'uses' => 'PeminjamanController@hapusPeminjaman']);
Route::auth();