<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\MejaDBController;
// import java.io ;

// System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

// Route::get('blog', function () {
// 	return view('blog');
// });

Route::get('pertemuan1', function () {
	return view('pertemuan1');
});

Route::get('css', function () {
	return view('tugas1CSS');
});

Route::get('bootstrap', function () {
	return view('bootstrap1');
});

Route::get('tugasbootstrap', function () {
	return view('gambar1bootstrap');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('sidebar', function () {
	return view('sidebar');
});

Route::get('javascript', function () {
	return view('js1');
});

Route::get('validasi', function () {
	return view('validasi1');
});

Route::get('danantara', function () {
	return view('danantara');
});

Route::get('ets', function () {
	return view('indexets');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('dosen', [DosenController::class,'index']);
Route::get('welcome', [DosenController::class,'welcome']);

// Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);
Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

// route blog
Route::get('/blog', [BlogController::class,'home'] );
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);

Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route mejaDB
Route::get('/meja', [MejaDBController::class, 'index']);
Route::get('/meja/tambah', [MejaDBController::class, 'tambah']);
Route::post('/meja/store', [MejaDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/meja/edit/{id}',[MejaDBController::class, 'edit']);
Route::post('/meja/update',[MejaDBController::class, 'update']);
Route::get('/meja/hapus/{id}', [MejaDBController::class, 'hapus']);

Route::get('/meja/cari', [MejaDBController::class, 'cari']);
