@extends('layouts.aplikasi')
@section('title', 'Edit Data Buku')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::model($buku, array('url' => "UpdateBuku/$buku->id_buku", 'method' => 'put')) !!}

    <div class="form-group">
        {!! Form::label('id_buku', 'ID Buku', ['class' => 'control-label']) !!}
        {!! Form::text('id_buku', null, ['class' => 'form-control', 'placeholder' => 'Masukkan ID Buku', 'disabled' => 'true']) !!}
        {!! Form::hidden('id_buku', null) !!}
    </div>

    <div class="form-group">
        {!! Form::label('judul_buku', 'Judul Buku', ['class' => 'control-label']) !!}
        {!! Form::text('judul_buku', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Judul Buku']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('pengarang', 'Pengarang', ['class' => 'control-label']) !!}
        {!! Form::text('pengarang', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Pengarang']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('tahun_terbit', 'Tahun Terbit', ['class' => 'control-label']) !!}
        {!! Form::number('tahun_terbit', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Tahun Terbit']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('penerbit', 'Penerbit', ['class' => 'control-label']) !!}
        {!! Form::text('penerbit', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Penerbit']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('jumlah_buku', 'Jumlah Buku', ['class' => 'control-label']) !!}
        {!! Form::number('jumlah_buku', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Jumlah Buku']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nomor_rak_buku', 'Nomor Rak Buku', ['class' => 'control-label']) !!}
        {!! Form::text('nomor_rak_buku', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nomor Rak Buku']) !!}
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}

    {!! Form::close() !!}

@endsection