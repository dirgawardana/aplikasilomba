@extends('dashboard')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Jenis Lomba
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('kategori.update', $kategori->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="jenislomba">Jenis Lomba :</label>
              <input type="text" class="form-control" name="jenislomba" value="{{$kategori->jenislomba}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Selesai</button>
      </form>
  </div>
</div>
@endsection