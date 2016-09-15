@extends('user.base')

@section('content')

<section class="content-header">
  <h1>
    Status
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{route('user.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Status</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <div class="row">
      <div class="col-md-12">
        <div class="box-body">
          <!-- isi berita -->

          <div class="row">
            <div class="col-md-6">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h5 class="box-title">Nilai</h5>
                </div>
                <div class="box-body">
                  IP Level 1 :<br/>
                  IP Level 2 :<br/>
                  IP Level 3 :<br/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box box-info">
                <div class="box-header with-border">
                  <h5 class="box-title">Biaya Administrasi</h5>
                </div>
                <div class="box-body">
                  Level 1 :<br/>
                  Level 2 :<br/>
                  Level 3 :<br/>
                </div>
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