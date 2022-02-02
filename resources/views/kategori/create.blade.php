@extends('dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3><strong>Menambah Jenis Lomba Baru</strong></h3>
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
   
<form action="{{ route('kategori.store') }}" method="POST">
    @csrf
  
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Lomba:</strong>
                <input type="text" name="jenislomba" class="form-control" placeholder="Jenis Lomba">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Kirim</button>
        </div>

    </div>
   
</form>
@endsection