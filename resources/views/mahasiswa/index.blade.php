@extends('layouts.aplikasi')
@section('title', 'Data Mahasiswa')
@section('content')

    <a href="{{ url('TambahMahasiswa') }}">
        <button class="btn btn-primary">Tambah Data</button>
    </a>

    <p></p>

    <table class="table table-bordered table-hover table-responsive table-striped">
        <thead>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </tr>
        </thead>
        <tbody>
        @foreach($mahasiswas as $mahasiswa)
            <tr>
                <td>{{ $mahasiswa->npm }}</td>
                <td>{{ $mahasiswa->nama }}</td>
                <td>{{ $mahasiswa->kelas }}</td>
                <td>{{ $mahasiswa->jenis_kelamin }}</td>
                <td>{{ $mahasiswa->alamat }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $mahasiswas->render() !!}

@endsection