@extends('layouts.aplikasi')
@section('title', 'Data Peminjaman Buku')
@section('content')

    <table class="table table-bordered table-hover table-responsive table-striped">
        <thead>
        <tr>
            <th class="text-center">NPM</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Kelas</th>
            <th class="text-center">Tanggal Peminjaman</th>
            <th class="text-center">Tanggal Pengembalian</th>
            <th class="text-center">Judul Buku</th>
            <th class="text-center">Pengarang</th>
            <th class="text-center">No Rak Buku</th>
        </tr>
        </thead>
        <tbody>
        @foreach($peminjamans as $peminjaman)
            <tr>
                <td>{{ $peminjaman->npm }}</td>
                <td>{{ $peminjaman->nama }}</td>
                <td>{{ $peminjaman->kelas }}</td>
                <td>{{ $peminjaman->tanggal_peminjaman }}</td>
                <td>{{ $peminjaman->tanggal_batas_pengembalian }}</td>
                <td>{{ $peminjaman->judul_buku }}</td>
                <td>{{ $peminjaman->pengarang }}</td>
                <td>{{ $peminjaman->nomor_rak_buku }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $peminjamans->render() !!}

@endsection