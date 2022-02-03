@extends('dashboard')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <div class="pull-right">
    <a class="btn btn-success" href="{{ route('kategori.create') }}"> Tambah Jenis Lomba</a>
  </div>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>No</td>
          <td>Jenis Lomba</td>
          <td colspan="2">Opsi</td>
        </tr>
    </thead>
    <tbody>
        @foreach($kategoris as $kategori)
        <tr>
            <td>{{$kategori->id}}</td>
            <td>{{$kategori->jenislomba}}</td>
            <td>
            <form action="{{ route('kategori.destroy',$kategori->id) }}" method="POST">
              <a class="btn btn-primary" href="{{ route('kategori.edit',$kategori->id) }}">Edit</a>
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection