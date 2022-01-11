@extends('layouts.app')

<?php $no=1?>
@section('content')
  <h3>Data Fakultas</h3>
  <a href="{{route('faculty.create')}}" class="btn btn-success">Tambah Data</a>
  <table class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Jumlah Mahasiswa</th>
          <th></th>
        </tr>
      </thead>
      
      <tbody>
        @foreach ($faculties as $faculty)
            <tr>
              <td>{{$no++}}</td>
              <td>{{$faculty->name}}</td>
              <td>{{ count ( $faculty->students ) }}</td>
              <td>
                <a href="{{route('faculty.edit',$faculty->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                <form action="{{route('faculty.destroy',$faculty->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            </tr>           
        @endforeach
      </tbody>
  </table>
@stop