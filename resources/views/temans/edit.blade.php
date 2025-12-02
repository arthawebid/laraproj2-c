@extends('template1')
@section('title','Ubah Data Teman')
@section('konten')
<h3>Ubah Data Teman</h3>

<form method="POST" action="{{ route('temans.update', $dta->id) }}">
@csrf
@method('PUT')

<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" value="{{ old('nama', $dta->nama ?? '') }}">
</div>
<div class="mb-3">
    <label class="form-label">alamat</label>
    <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $dta->alamat ?? '') }}">
</div>
<div class="row">
    <div class="col-6">
        <div class="mb-3">
            <label class="form-label">kota</label>
            <input type="text" name="kota" class="form-control" value="{{ old('kota', $dta->kota ?? '') }}">
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label class="form-label">telp</label>
            <input type="text" name="telp" class="form-control" value="{{ old('telp', $dta->telp ?? '') }}">
        </div>
    </div>
</div>

<div class="mb-3">
    <button type="submit" class="btn btn-primary"> Ubah Data </button>
    <a href="{{ route('temans.index') }}" class="btn btn-secondary"> Kembali </a>
</div>

</form>


@endsection