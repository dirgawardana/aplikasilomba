@extends('dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">   
        <div class="pull-left">
            <h3><strong>Menambah Peserta Lomba Baru</strong></h3>
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

{{ Form::open(['route'=>'perlombaans.store','files'=>true]) }}
    @csrf
  
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Lengkap :</strong>
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin :</strong><br>
                <input type="radio" name="jeniskelamin" value="L">Laki-Laki<br>
                <input type="radio" name="jeniskelamin" value="P">Perempuan<br>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Lomba</strong>
                    {{form::select('jenislomba', $kategori, null, ['class' => 'form-control select', 'placeholder' => 'Jenis Lomba', 'id' => 'jenislomba', 'required'])}}
                    <span class="help-block with-errors"></span>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Usia :</strong>
                <input type="text" name="usia" class="form-control" placeholder="Usia">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat :</strong>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Kirim</button>
        </div>

    </div>
   
</form>
@endsection