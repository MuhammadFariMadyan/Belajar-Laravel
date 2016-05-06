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
            <th class="text-center">NPM</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Kelas</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">Aksi</th>
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
                <td class="text-center">
                    <a href="{{ url("EditMahasiswa/$mahasiswa->npm") }}">
                        <button class="btn btn-success">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </button>
                    </a>
                    {!! Form::open(array('url' => "HapusMahasiswa/$mahasiswa->npm", 'method' => 'delete')) !!}
                    <button class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                    </button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $mahasiswas->render() !!}

@endsection