@extends('layouts.aplikasi')
@section('title', 'Data Buku')
@section('content')

    <a href="{{ url('TambahBuku') }}">
        <button class="btn btn-primary">Tambah Data</button>
    </a>

    <p></p>

    <table class="table table-bordered table-hover table-responsive table-striped">
        <thead>
        <tr>
            <th class="text-center">ID Buku</th>
            <th class="text-center">Judul Buku</th>
            <th class="text-center">Pengarang</th>
            <th class="text-center">Tahun Terbit</th>
            <th class="text-center">Penerbit</th>
            <th class="text-center">Jumlah Buku</th>
            <th class="text-center">Nomor Rak Buku</th>
            <th class="text-center">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bukus as $buku)
            <tr>
                <td>{{ $buku->id_buku }}</td>
                <td>{{ $buku->judul_buku }}</td>
                <td>{{ $buku->pengarang }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->jumlah_buku }}</td>
                <td>{{ $buku->nomor_rak_buku }}</td>
                <td class="text-center">
                    <a href="{{ url("EditBuku/$buku->id_buku") }}">
                        <button class="btn btn-success">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </button>
                    </a>
                    {!! Form::open(array('url' => "HapusBuku/$buku->id_buku", 'method' => 'delete')) !!}
                    <button class="btn btn-danger">
                        <i class="glyphicon glyphicon-trash"></i>
                    </button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $bukus->render() !!}

@endsection