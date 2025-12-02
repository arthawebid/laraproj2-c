@extends('tamplate1')
@section('title','List Data Teman')
@section('konten')
<h3>List Data Teman</h3>

<table>
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
            <td><a href="{{ route('teman.edit', $d->id) }}"> Ubah </a> | Hapus </td>
        </tr>
    @endforeach

    </tbody>
</table>
@endsection