@extends('lombas.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Daftar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('lombas.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Gagal!</strong> Masukkan Kembali.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('lombas.update',$lomba->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="name" value="{{ $lomba->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <input type="text" jeniskelamin="jeniskelamin" value="{{ $lomba->jeniskelamin }}" class="form-control" placeholder="Jenis Kelamin">
                </div>
            </div>
            <div class="form-group">
                <strong>Usia:</strong>
                <input type="text" usia="usia" value="{{ $lomba->usia }}" class="form-control" placeholder="Usia">
            </div>
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" alamat="alamat" value="{{ $lomba->alamat }}" class="form-control" placeholder="Alamat">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </form>
@endsection