<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //Controller made by php artisan make:controller DosenController
    public function index(){
        $a = 8;
        $b = 5;
        $c = $a*$b;
        return "<h1>Hasil Perkalian = ". $c . "</h1>";
    }
    public function biodata(){
        $nama = "Tommy Gunawan";
        $alamat = "Surabaya";
        $umur = 19;
        return view('Pweb Materi.biodata',['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function showtime($jam){
        return $jam;
    }

    public function formulir(){
        return view('Pweb Materi.formulir');
    }

    public function proses(Request $r){
        $nama = $r->input('nama');
        $alamat = $r ->input('alamat');
        $ipk = $r ->input('ipk');
        return "Nama : ". $nama .", Alamat : ". $alamat .", IPK : ". $ipk ."<br> isi asli: ". $r;
    }
}
