<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
public function index()
{
// mengambil data dari table belanja
$kategori = DB::table('kategori')->get();
// mengirim data belanja ke view index
return view('Pweb EAS.index2',['kategori' => $kategori]);

}

public function view(Request $request){
    // mengambil data pegawai berdasarkan id yang dipilih
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('Pweb EAS.view',['ID' => $request->nama]);
}
}
