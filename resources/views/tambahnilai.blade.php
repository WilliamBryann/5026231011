<body>
    @extends('template')
    @section('content')

    <h3>Data Nilai</h3>

    <a href="/eas"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/eas/store" method="post">
        {{ csrf_field() }}

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">NRP </label>
            </div>
            <div class="col-6">
                <textarea name="normorinduksiswa" required="required" class="form-control"></textarea>
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Nilai Angka </label>
            </div>
            <div class="col-6">
                <textarea name="nilaiangka" required="required" class="form-control"></textarea>
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">SKS </label>
            </div>
            <div class="col-6">
                <textarea name="sks" required="required" class="form-control"></textarea>
            </div>
        </div>
        <br />
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
    @endsection
</body>
