<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		//$pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')-> get();

    	// mengirim data pegawai ke view index
		return view('Pweb W15.index',['nilaikuliah' => $nilaikuliah]);

	}

    public function tambah()
	{

		// memanggil view tambah
		return view('Pweb W15.tambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->nilaiangka,
			'SKS' => $request->SKS,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');
	}
}
