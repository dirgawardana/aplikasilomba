@extends('dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Daftar</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('perlombaans.index') }}"> Kembali</a>
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

    <form action="{{ route('perlombaans.update',$perlombaan->id) }}" method="POST">
        @csrf
        @method('PUT')
         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="name" value="{{ $perlombaan->name }}" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <input type="text" name="jeniskelamin" value="{{ $perlombaan->jeniskelamin }}" class="form-control" placeholder="Jenis Kelamin">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Lomba:</strong>
                    <input type="text" name="jenislomba" value="{{ $perlombaan->jeniskelamin }}" class="form-control" placeholder="Jenis Kelamin">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Usia:</strong>
                    <input type="text" name="usia" value="{{ $perlombaan->usia }}" class="form-control" placeholder="Usia">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input type="text" name="alamat" value="{{ $perlombaan->alamat }}" class="form-control" placeholder="Alamat">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </div>
    </form>
@endsection