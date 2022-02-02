@extends('template')
@section('content')

<div class="content">
  <div class="row">
    <div class="col-lg-5 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-single-02"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Peserta Lomba</p>
                <p class="card-title">{{ \App\perlombaan::count() }} Orang<p>
              </div>
            </div>
          </div>
        </div>
       <hr>
      </div>
    </div>
    <div class="col-lg-5 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="fa fa-flag-checkered"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Jenis Lomba</p>
                <p class="card-title">{{ \App\kategori::count() }} Perlombaan<p>
              </div>
            </div>
          </div>
        </div>
       <hr>
      </div>
    </div>
  </div>
</div>

@endsection