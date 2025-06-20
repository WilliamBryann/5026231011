<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', '5026231011 - William Bryan Pangestu')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* Warna latar belakang yang lembut */
        }

        .header-section {
            background: linear-gradient(90deg, #007bff, #0056b3); /* Gradient biru yang modern */
            color: white;
            padding: 4rem 2rem; /* Padding lebih besar agar tidak kaku */
            text-align: center;
        }

        .header-section h1 {
            font-weight: 700;
            font-size: 2.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .navbar {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            background-color: #ffffff !important;
        }

        .navbar-nav .nav-link {
            color: #333 !important;
            font-weight: 500;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: #007bff !important;
        }

        .content-card {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 2.5rem; /* Sedikit padding tambahan */
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            margin-top: -50px; /* Efek kartu menumpuk di atas header */
            position: relative;
            z-index: 10;
        }

        .page-title {
            color: #0056b3;
            font-weight: 600;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 2rem;
        }

        .site-footer {
            background-color: #343a40;
            color: #f8f9fa;
            padding: 2rem 0;
            margin-top: 3rem;
        }

    </style>
</head>

<body>
    <header class="header-section">
        <div class="container-fluid">
            <h1>William Bryan Pangestu</h1>
            <p class="lead">5026231011 - PWEB B</p>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/frontend"><i class="fas fa-desktop mr-1"></i> All Front End</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pegawai"><i class="fas fa-users mr-1"></i> Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/meja"><i class="fas fa-table mr-1"></i> Tugas CRUD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/eas"><i class="fas fa-file-alt mr-1"></i> EAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/latihan1"><i class="fas fa-pencil-ruler mr-1"></i> Latihan 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/karyawan"><i class="fas fa-briefcase mr-1"></i> Latihan 2</a>
                    </li>
                    <li class="nav-item"> {{--Latihan 3 sama dengan Latihan 2 sesuai file di Classroom--}}
                        <a class="nav-link" href="/karyawan"><i class="fas fa-pencil-ruler mr-1"></i> Latihan 3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container-fluid my-5 px-sm-5">
        <div class="content-card">
            <h3 class="page-title">@yield('judul_halaman')</h3>
            @yield('content')
        </div>
    </main>

    <footer class="site-footer text-center">
        <div class="container-fluid">
            <p>&copy; {{ date('Y') }} - William Bryan Pangestu (5026231011). Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
