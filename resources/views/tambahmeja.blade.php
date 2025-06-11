{{-- <!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head> --}}

<body>
    @extends('template')
    @section('content')
    {{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
    <h3>Data Meja</h3>

    <a href="/meja"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/meja/store" method="post">
        {{ csrf_field() }}
        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Merk </label>
            </div>
            <div class="col-6">
                <input type="text" name="merkmeja" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga </label>
            </div>
            <div class="col-6">
                <input type="text" name="hargameja" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Tersedia </label>
            </div>
            <div class="col-6">
                <select name="tersedia" required class="form-control">
                    <option value="1">Tersedia</option>
                    <option value="0">Tidak Tersedia</option>
                </select>
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Berat </label>
            </div>
            <div class="col-6">
                <textarea name="berat" required="required" class="form-control"></textarea>
            </div>
        </div>
        <br />
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
    @endsection
</body>

{{-- </html> --}}
