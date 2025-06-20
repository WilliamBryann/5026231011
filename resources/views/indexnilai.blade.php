<body>
    @extends('template')
    @section('content')
    <h3>Data Nilai</h3>

    <a href="/eas/tambah" class="btn btn-info"> + Tambah Nilai Baru</a>
    <br />

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka </th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilai as $p)
            <tr>
                <td>{{ $p->id}}</td>
                <td>{{ $p->normorinduksiswa}}</td>
                <td>{{ $p->nilaiangka}}</td>
                <td>{{ $p->sks }}</td>
                <td>
                    @if ($p->nilaiangka <= 40)
                        <span >D</span>
                    @elseif ($p->nilaiangka >= 41 && $p->nilaiangka <= 60 )
                        <span >B</span>
                    @elseif ($p->nilaiangka >= 61 && $p->nilaiangka <= 80)
                        <span >C</span>
                    @else
                        <span >A</span>
                    @endif

                </td>
                <td>
                    {{ $p->sks * $p->nilaiangka }}
                </td>
            </tr>
        @endforeach
    </table>
    @endsection

</body>
