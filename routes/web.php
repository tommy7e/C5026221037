<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    //bisa diisi program apa saja
    return "halo apa kabar?";
});

Route::get('halo2', function () {
    return "<p>Tes buat <b>heading 1</b></p>";
});

Route::get('blog', function () {
    return view("blog");
});

Route::get('hyperlink', function () {
    return view("Pweb ETS.ETS");
});

Route::get('badge1', function () {
    return view("Pweb Badges.Badge Inside an Element");
});

Route::get('badge2', function () {
    return view("Pweb Badges.Pill Badges");
});

Route::get('linktree', function () {
    return view("Pweb LinkTree.LinkTree");
});

Route::get('layout', function () {
    return view("Pweb Layout.Layout");
});

Route::get('laravel', function () {
    return view("Laravel");
});

Route::get('hello', function () {
    return view("Pweb Materi.hello");
});

Route::get('js1', function () {
    return view("Pweb Materi.js1");
});

Route::get('js2', function () {
    return view("Pweb Materi.js2");
});

Route::get('link', function () {
    return view("Pweb Materi.link");
});

Route::get('rs1', function () {
    return view("Pweb Materi.responsive1");
});

Route::get('rs2', function () {
    return view("Pweb Materi.responsive2");
});

Route::get('style', function () {
    return view("Pweb Materi.style");
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('jam/{jam}', 'App\Http\Controllers\DosenController@showtime');

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');

Route::post('formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog2', function () {
    return view("Pweb Materi.home");
});

Route::get('/blog2/tentang', function () {
    return view("Pweb Materi.tentang");
});

Route::get('/blog2/kontak', function () {
    return view("Pweb Materi.kontak");
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');


Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiController@index');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiController@store');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

Route::get('/snack','App\Http\Controllers\SnackController@index');
Route::get('/snack/beli','App\Http\Controllers\SnackController@beli');
Route::post('/snack/store','App\Http\Controllers\SnackController@store');
Route::get('/snack/edit/{id}','App\Http\Controllers\SnackController@edit');
Route::post('/snack/update','App\Http\Controllers\SnackController@update');
Route::get('/snack/hapus/{id}','App\Http\Controllers\SnackController@hapus');

Route::get('/snack/cari','App\Http\Controllers\SnackController@cari');

Route::get('/snack/view/{id}','App\Http\Controllers\SnackController@view');

Route::get('/kategori','App\Http\Controllers\KategoriController@index');
Route::get('/kategori/view','App\Http\Controllers\KategoriController@view');
