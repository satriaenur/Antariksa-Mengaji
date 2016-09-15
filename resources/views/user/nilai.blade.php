@extends('user.base')

@section('content')

<section class="content-header">
  <h1>
    Nilai
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{route('user.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Nilai</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <div class="row">
      <div class="col-md-12">
        <div class="box-body">
          <!-- isi berita -->

          <div class="row">
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h5 class="box-title">Merkurius</h5>
                </div>
                <div class="box-body">
                  <table class="table table-striped">
                    <tr>
                      <th>Pekan</th>
                      <th>Kuis Praktek</th>
                      <th>A</th>
                      <th>B</th>
                      <th>C</th>
                      <th>D</th>
                      <th>E</th>
                    </tr>
                    <tr>
                      <td>1. Pengenalan Tajwid</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>2. Tanda Panjang 2 Harakat</td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </table><br/><br/>
                  <div class="pull-right alert alert-success">IP : 4</div>
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