@extends('layouts.app')
@section('title', 'Tambah Data Peminjaman')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::open(array('url' => 'SimpanPeminjaman')) !!}

    <div class="form-group">
        {!! Form::label('tanggal_peminjaman', 'Tanggal Peminjaman', ['class' => 'control-label']) !!}
        {!! Form::date('tanggal_peminjaman', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Tanggal Peminjaman']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tanggal_batas_pengembalian', 'Tanggal Batas Pengembalian', ['class' => 'control-label']) !!}
        {!! Form::date('tanggal_batas_pengembalian', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Tanggal Batas Pengembalian']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('npm', 'Mahasiswa', ['class' => 'control-label']) !!}
        {!! Form::select('npm', $mahasiswas, null, ['class' => 'form-control', 'placeholder' => 'Pilih Mahasiswa']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('id_buku', 'Buku', ['class' => 'control-label']) !!}
        {!! Form::select('id_buku', $bukus, null, ['class' => 'form-control', 'placeholder' => 'Pilih Buku']) !!}
    </div>

    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection