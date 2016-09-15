@extends('user.base')

@section('content')

<section class="content-header">
  <h1>
    Materi
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{route('user.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Materi</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <div class="row">
      <div class="col-md-12">
        <div class="box-body">
          <!-- isi berita -->

          <div class="row">
            <div class="col-md-4">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h5 class="box-title">Merkurius</h5>
                </div>
                <div class="box-body">
                  Pekan 1 :<br/>
                  Pengenalan Tajwid
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h5 class="box-title">Penus</h5>
                </div>
                <div class="box-body">
                  Pekan 1 :<br/>
                  Kesempurnaan Vocal Tanda Baca
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h5 class="box-title">Bumi</h5>
                </div>
                <div class="box-body">
                  Pekan 1 :<br/>
                  Pengenalan huruf a ba ta tsa jim ha kha
                </div>
              </div>
            </div>
          </div>

          <!-- /isi berita -->
        </div>
    </div>
  </div>
</section>
@endsection