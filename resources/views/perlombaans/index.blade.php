@extends('dashboard')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('perlombaans.create') }}"> Tambah Peserta Lomba</a>
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
            <th width="45px">No</th>
            <th>Nama Lengkap</th>
            <th width="120px">Jenis Kelamin</th>
            <th width="185px">Jenis Lomba</th>
            <th width="50px">Usia</th>
            <th>Alamat</th>
            <th width="185px">Opsi</th>
        </tr>
        @foreach ($perlombaans as $perlombaan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $perlombaan->name }}</td>
            <td>{{ $perlombaan->jeniskelamin }}</td>
            <td>{{ $perlombaan->jenislomba }}</td>
            <td>{{ $perlombaan->usia }}</td>
            <td>{{ $perlombaan->alamat }}</td>
            <td>
                <form action="{{ route('perlombaans.destroy',$perlombaan->id) }}" method="POST">
                    <a class="btn btn-primary" href="{{ route('perlombaans.edit',$perlombaan->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $perlombaans->links() !!}
      
@endsection