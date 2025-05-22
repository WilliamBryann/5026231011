<?php

use Illuminate\Support\Facades\Route;
// import java.io ;

// System.out.println("Hello World");
Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

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
	return view('index');
});

Route::get('frontend', function () {
	return view('frontend');
});
