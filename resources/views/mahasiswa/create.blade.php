@extends('layouts.aplikasi')
@section('title', 'Tambah Data Mahasiswa')
@section('content')

    {!! Form::open(array('url' => 'SimpanMahasiswa')) !!}

    <div class="form-group">
        {!! Form::label('npm', 'NPM', ['class' => 'control-label']) !!}
        {!! Form::text('npm', null, ['class' => 'form-control', 'placeholder' => 'Masukkan NPM']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('kelas', 'Kelas', ['class' => 'control-label']) !!}
        {!! Form::text('kelas', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Kelas']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'control-label']) !!}
        {!! Form::select('jenis_kelamin', array('pria' => 'Pria', 'wanita' => 'Wanita'), null, ['class' => 'form-control', 'placeholder' => 'Pilih Jenis Kelamin']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('alamat', 'Alamat', ['class' => 'control-label']) !!}
        {!! Form::textarea('alamat', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Alamat']) !!}
    </div>

    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection