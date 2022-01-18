@extends('lombas.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PENDAFTARAN LOMBA AGUSTUSAN</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('lombas.create') }}"> Membuat Daftar Baru</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Usia</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($lombas as $lomba)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $lomba->name }}</td>
            <td>{{ $lomba->jeniskelamin }}</td>
            <td>{{ $lomba->usia }}</td>
            <td>{{ $lomba->alamat }}</td>
            <td>
                <a href="{{ route('lombas.edit',$lomba->id)}}" class="btn btn-primary">Edit</a>
                    <a action="{{ route('lombas.destroy', $lomba->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </a>
                </td>
        </tr>
        @endforeach
    </table>
  
    {!! $lombas->links() !!}
      
@endsection