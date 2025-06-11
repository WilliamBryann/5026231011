@extends('template')

@section('content')

    <h3>Edit Meja</h3>

    <a href="/meja"> Kembali</a>

    <br />
    <br />

    @foreach ($meja as $p)
        <form action="/meja/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="ID" value="{{ $p->ID }}"> <br />

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Merk Meja </label>
                </div>
                <div class="col-6">
                    <input type="text" name="merkmeja" required="required" class="form-control" value="{{ $p->merkmeja }}"> <br />
                </div>
            </div>
                    <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga Meja </label>
            </div>
            <div class="col-6">
                <input type="text" name="hargameja" required="required" class="form-control" value="{{ $p->hargameja }}"> <br />
            </div>
        </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Tersedia </label>
                </div>
                <div class="col-6">
                    <select name="tersedia" required class="form-control">
                        <option value="1" {{ $p->tersedia == 1 ? 'selected' : '' }}>Tersedia</option>
                        <option value="0" {{ $p->tersedia == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
                    </select>
                </div>
            </div>

            <div class="row p-1 mb-1">
                <div class="col-2">
                    <label class="control-label">Berat </label>
                </div>
                <div class="col-6">
                    <input type="text" name="berat" required="required" class="form-control" value="{{ $p->berat }}"> <br />
                </div>
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach
@endsection
