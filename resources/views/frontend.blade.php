<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>William Bryan Pangestu - Portofolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card-custom {
      transition: all 0.3s ease-in-out;
      border: none;
      border-radius: 15px;
    }

    .card-custom:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .btn-access {
      background-color: #0d6efd;
      color: white;
      border-radius: 50px;
      transition: 0.3s;
    }

    .btn-access:hover {
      background-color: #0b5ed7;
      color: white;
    }

    .section-title {
      font-weight: bold;
      font-size: 1.5rem;
      color: #343a40;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1 class="display-4">William Bryan Pangestu</h1>
      <p class="lead">Berikut adalah kumpulan tugas yang telah saya buat menggunakan Laravel & Blade</p>
    </div>
  </header>

  <!-- Card Layout -->
  <div class="container my-5">
    <h2 class="text-center section-title mb-4">Daftar Tugas</h2>
    <div class="row g-4">

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">Halo Laravel</h5>
          <p class="card-text">Tugas pertama dengan Laravel.</p>
          <a href="/halo" class="btn btn-access">Akses Website</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">Blog Sederhana</h5>
          <p class="card-text">Membuat halaman blog.</p>
          <a href="/blog" class="btn btn-access">Akses Website</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">Pertemuan 1</h5>
          <p class="card-text">Latihan awal Blade & routing.</p>
          <a href="/pertemuan1" class="btn btn-access">Akses Website</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">Tugas CSS</h5>
          <p class="card-text">Penerapan styling CSS.</p>
          <a href="/css" class="btn btn-access">Akses Website</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">Tugas Bootstrap Dasar</h5>
          <p class="card-text">Belajar Bootstrap komponen dasar.</p>
          <a href="/bootstrap" class="btn btn-access">Akses Website</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">Tugas Gambar Bootstrap</h5>
          <p class="card-text">Layout gambar dengan Bootstrap.</p>
          <a href="/tugasbootstrap" class="btn btn-access">Akses Website</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">Linktree</h5>
          <p class="card-text">Halaman dengan beberapa tautan.</p>
          <a href="/linktree" class="btn btn-access">Akses Website</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">Sidebar Layout</h5>
          <p class="card-text">Navigasi menggunakan sidebar.</p>
          <a href="/sidebar" class="btn btn-access">Akses Website</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">Tugas JavaScript</h5>
          <p class="card-text">Interaktif dengan JavaScript.</p>
          <a href="/javascript" class="btn btn-access">Akses Website</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">Validasi Form</h5>
          <p class="card-text">Validasi input data dengan form.</p>
          <a href="/validasi" class="btn btn-access">Akses Website</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">Tugas Danantara</h5>
          <p class="card-text">Project kolaborasi frontend.</p>
          <a href="/danantara" class="btn btn-access">Akses Website</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4">
        <div class="card card-custom h-100 p-4 bg-light">
          <h5 class="card-title">ETS - Halaman Index</h5>
          <p class="card-text">Evaluasi tengah semester.</p>
          <a href="/ets" class="btn btn-access">Akses Website</a>
        </div>
      </div>

    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">© {{ date('Y') }} Portofolio Laravel - William Bryan Pangestu</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
