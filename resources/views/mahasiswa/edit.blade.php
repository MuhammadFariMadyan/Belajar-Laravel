@extends('layouts.aplikasi')
@section('title', 'Edit Data Mahasiswa')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::model($mahasiswa, array('url' => "UpdateMahasiswa/$mahasiswa->npm", 'method' => 'put')) !!}

    <div class="form-group">
        {!! Form::label('npm', 'NPM', ['class' => 'control-label']) !!}
        {!! Form::text('npm', null, ['class' => 'form-control', 'placeholder' => 'Masukkan NPM', 'disabled' => 'true']) !!}
        {!! Form::hidden('npm', null) !!}
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

    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection