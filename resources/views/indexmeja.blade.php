{{-- <!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head> --}}

<body>
    @extends('template')
    @section('content')
    <h3>Data Meja</h3>

    <a href="/meja/tambah" class="btn btn-info"> + Tambah Meja Baru</a>

	<form action="/meja/cari" method="GET" class="form-inline">
         <label class="form-label">Cari Data Meja :</label>
		<input type="text" name="cari" placeholder="Cari Meja ..." class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
    <br />

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Merk</th>
            <th>Harga (Rp)</th>
            <th>Tersedia</th>
            <th>Berat (kg)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($meja as $p)
            <tr>
                <td>{{ $p->ID}}</td>
                <td>{{ $p->merkmeja }}</td>
                <td>{{ $p->hargameja }}</td>
                <td>
                    @if ($p->tersedia == 1)
                        <span class="badge badge-success px-2 py-2">Tersedia</span>
                    @else
                        <span class="badge badge-danger px-2 py-2">Tidak Tersedia</span>
                    @endif
                </td>
                <td>{{ $p->berat }}</td>
                <td>
                    <a href="/meja/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
                    <a href="/meja/hapus/{{ $p->ID }}"class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $meja->links()}} <!-- hanya bisa dipakai dengan paginate, saat get() harus dihapus -->
    @endsection

</body>

{{-- </html> --}}
