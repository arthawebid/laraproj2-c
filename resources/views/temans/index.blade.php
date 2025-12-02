@extends('template1')
@section('title','List Data Teman')
@section('konten')
<h3>List Data Teman</h3>
<a href="{{ route('temans.create') }}" class="btn btn-primary btn-sm">Tambah Data</a>

@if(session('sukses'))
<div class="alert alert-success">{{ session('sukses') }}</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Teman</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach($dta as $d)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $d->nama }}</td>
            <td><a href="{{ route('temans.edit', $d->id) }}" class="btn btn-warning btn-sm"> Ubah </a> | Hapus </td>
        </tr>
    @endforeach

    </tbody>
</table>
@endsection