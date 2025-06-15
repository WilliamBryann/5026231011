@extends('template')

{{-- Judul untuk tab browser --}}
@section('title', 'Portofolio Frontend - William Bryan Pangestu')

{{-- Judul utama di dalam kartu konten --}}
@section('judul_halaman', 'Kumpulan Tugas & Latihan Frontend')

{{-- Konten utama halaman --}}
@section('content')

<style>
    .card-custom {
        transition: all 0.3s ease-in-out;
        border: none;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }

    .card-custom:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .btn-access {
        background-color: #007bff;
        color: white;
        border-radius: 50px;
        padding: 8px 25px;
        transition: 0.3s;
    }

    .btn-access:hover {
        background-color: #0056b3;
        color: white;
    }
</style>


<div class="row">

    {{-- Daftar Tugas --}}
    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card card-custom h-100 p-3 bg-light text-center">
        <div class="card-body">
            <h5 class="card-title font-weight-bold">Halo Laravel</h5>
            <p class="card-text">Tugas pertama dengan Laravel.</p>
        </div>
        <div class="card-footer bg-transparent border-0">
            <a href="/halo" class="btn btn-access">Akses Website</a>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-custom h-100 p-3 bg-light text-center">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Blog Sederhana</h5>
              <p class="card-text">Membuat halaman blog.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="/blog" class="btn btn-access">Akses Website</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-custom h-100 p-3 bg-light text-center">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Pertemuan 1</h5>
                <p class="card-text">Latihan awal Blade & routing.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="/pertemuan1" class="btn btn-access">Akses Website</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-custom h-100 p-3 bg-light text-center">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Tugas CSS</h5>
              <p class="card-text">Penerapan styling CSS.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="/css" class="btn btn-access">Akses Website</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-custom h-100 p-3 bg-light text-center">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Tugas Bootstrap Dasar</h5>
              <p class="card-text">Belajar Bootstrap komponen dasar.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="/bootstrap" class="btn btn-access">Akses Website</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-custom h-100 p-3 bg-light text-center">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Tugas Gambar Bootstrap</h5>
                <p class="card-text">Layout gambar dengan Bootstrap.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="/tugasbootstrap" class="btn btn-access">Akses Website</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-custom h-100 p-3 bg-light text-center">
            <div class="card-body">
                <h5 class="card-title font-weight-bold">Linktree</h5>
                <p class="card-text">Halaman dengan beberapa tautan.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="/linktree" class="btn btn-access">Akses Website</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-custom h-100 p-3 bg-light text-center">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Sidebar Layout</h5>
              <p class="card-text">Navigasi menggunakan sidebar.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="/sidebar" class="btn btn-access">Akses Website</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-custom h-100 p-3 bg-light text-center">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Tugas JavaScript</h5>
              <p class="card-text">Interaktif dengan JavaScript.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="/javascript" class="btn btn-access">Akses Website</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-custom h-100 p-3 bg-light text-center">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Validasi Form</h5>
              <p class="card-text">Validasi input data dengan form.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="/validasi" class="btn btn-access">Akses Website</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-custom h-100 p-3 bg-light text-center">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">Tugas Danantara</h5>
              <p class="card-text">Sudah diganti dengan ETS</p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="/ets" class="btn btn-access">Akses Website</a>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card card-custom h-100 p-3 bg-light text-center">
            <div class="card-body">
              <h5 class="card-title font-weight-bold">ETS - Halaman Index</h5>
              <p class="card-text">Evaluasi tengah semester.</p>
            </div>
            <div class="card-footer bg-transparent border-0">
                <a href="/ets" class="btn btn-access">Akses Website</a>
            </div>
        </div>
    </div>

</div>

@endsection
