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
Route::get('/Buku', 'BukuController@index');
Route::get('/TambahBuku', 'BukuController@tambahBuku');
Route::post('/SimpanBuku', 'BukuController@simpanBuku');
Route::get('/EditBuku/{idBuku}', 'BukuController@editBuku');
Route::put('/UpdateBuku/{idBuku}', 'BukuController@updateBuku');

//route mahasiswa
Route::get('/Mahasiswa', 'MahasiswaController@index');
Route::get('/TambahMahasiswa', 'MahasiswaController@tambahMahasiswa');
Route::post('/SimpanMahasiswa', 'MahasiswaController@simpanMahasiswa');
Route::get('/EditMahasiswa/{npm}', 'MahasiswaController@editMahasiswa');
Route::put('/UpdateMahasiswa/{npm}', 'MahasiswaController@updateMahasiswa');

//route peminjaman
Route::get('/Peminjaman', 'PeminjamanController@index');
Route::get('/TambahPeminjaman', 'PeminjamanController@tambahPeminjaman');
Route::post('/SimpanPeminjaman', 'PeminjamanController@simpanPeminjaman');
Route::get('/EditPeminjaman/{idPeminjaman}', 'PeminjamanController@editPeminjaman');
Route::put('/UpdatePeminjaman/{npm}', 'PeminjamanController@updatePeminjaman');