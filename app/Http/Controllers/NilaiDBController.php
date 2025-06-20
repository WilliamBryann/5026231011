<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiDBController extends Controller
{
    public function index()
    {
    	// mengambil data dari table nilai
    	$nilai = DB::table('nilai')->get(); //all records in array

    	// mengirim data nilai ke view index
    	return view('indexnilai',['nilai' => $nilai]);
    }

// method untuk menampilkan view form tambah nilai
    public function tambah(){
        // memanggil view tambah
        return view('tambahnilai');
    }

    // method untuk insert data ke table nilai
    public function store(Request $request)
    {
        // insert data ke table nilai
        DB::table('nilai')->insert([
            'id' => $request->id,
            'normorinduksiswa' => $request->normorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);
        // alihkan halaman ke halaman eas
        return redirect('/eas');

    }
}
