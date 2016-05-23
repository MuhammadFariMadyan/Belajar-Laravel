@extends('layouts.app')
@section('title', 'Edit Data Peminjaman')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::model($peminjaman, array('url' => "UpdatePeminjaman/$peminjaman->id_peminjaman", 'method' => 'put')) !!}

    <div class="form-group">
        {!! Form::label('id_peminjaman', 'ID Peminjaman', ['class' => 'control-label']) !!}
        {!! Form::text('id_peminjaman', null, ['class' => 'form-control', 'placeholder' => 'Masukkan ID Peminjaman', 'disabled' => 'true']) !!}
        {!! Form::hidden('id_peminjaman', null) !!}
    </div>

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

    {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}

@endsection