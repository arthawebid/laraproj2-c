@extends('template1')
@section('title','Tambah Data Teman')
@section('konten')
<h3>Tambah Data Teman</h3>

<form method="POST" action="{{ route('temans.store') }}">
@csrf

<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control">
</div>
<div class="mb-3">
    <label class="form-label">alamat</label>
    <input type="text" name="alamat" class="form-control">
</div>
<div class="row">
    <div class="col-6">
        <div class="mb-3">
            <label class="form-label">kota</label>
            <input type="text" name="kota" class="form-control">
        </div>
    </div>
    <div class="col-6">
        <div class="mb-3">
            <label class="form-label">telp</label>
            <input type="text" name="telp" class="form-control">
        </div>
    </div>
</div>

<div class="mb-3">
    <button type="submit" class="btn btn-primary"> Buat Data </button>
    <a href="{{ route('temans.index') }}" class="btn btn-secondary"> Kembali </a>
</div>

</form>


@endsection