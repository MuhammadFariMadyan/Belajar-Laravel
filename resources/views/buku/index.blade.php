@extends('layouts.aplikasi')
@section('title', 'Data Buku')
@section('content')

    <table class="table table-bordered table-hover table-responsive table-striped">
        <thead>
        <tr>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Jumlah Buku</th>
            <th>Nomor Rak Buku</th>
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
            </tr>
        @endforeach
        </tbody>
    </table>

    {!! $bukus->render() !!}

@endsection