<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SnackController extends Controller
{
public function index()
{
// mengambil data dari table belanja
$snack = DB::table('snack')->paginate(15);
// mengirim data belanja ke view index
return view('Pweb W15Pra.index2',['snack' => $snack]);

}

// method untuk menampilkan view form tambah belanja
public function beli()
{

// memanggil view tambah
return view('Pweb W15Pra.beli');

}

// method untuk insert data ke table belanja
public function store(Request $request)
{
// insert data ke table belanja
DB::table('snack')->insert([
'kodesnack' => $request->kodesnack,
'merksnack' => $request->merk,
'stocksnack' => $request->stock,
'tersedia' => $request->tersedia
]);
// alihkan halaman ke halaman belanja
return redirect('/snack');

}

// method untuk hapus data belanja
public function hapus($id)
{
// menghapus data belanja berdasarkan id yang dipilih
DB::table('snack')->where('kodesnack',$id)->delete();

// alihkan halaman ke halaman belanja
return redirect('/snack');
}

public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$snack = DB::table('snack')->where('kodesnack',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('Pweb W15Pra.edit',['snack' => $snack]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('snack')->where('kodesnack',$request->kodebarang)->update([
			'merksnack' => $request->merk,
			'stocksnack' => $request->stock,
			'tersedia' => $request->tersedia
		]);

        $snack = DB::table('snack')->where('kodesnack',$request->kodebarang)->get();

        // alihkan halaman ke halaman pegawai
		return view('Pweb W15Pra.view',['snack' => $snack]);
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$snack = DB::table('snack')
		->where('merksnack','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('Pweb W15Pra.index2',['snack' => $snack, 'cari' => $cari]);

	}

    public function view($id){
        // mengambil data pegawai berdasarkan id yang dipilih
		$snack = DB::table('snack')->where('kodesnack',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('Pweb W15Pra.view',['snack' => $snack]);
    }
}
