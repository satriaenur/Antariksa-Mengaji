@extends('user.base')

@section('content')

<section class="content-header">
  <h1>
    Profile
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{route('user.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Profile</li>
  </ol>
</section>

    <!-- Main content -->
<section class="content">
  <div class="row">
      <div class="col-md-12">
        <div class="box-body">

          <div class="row">
            <div class="col-md-6">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h5 class="box-title">Biodata</h5>
                </div>
                <div class="box-body">
                  <table class="table">
                    <tr>
                      <td> Nama </td>
                      <td> : {{ Auth::user()->pendaftar[0]->full_name }} </td>
                    </tr>
                    <tr>
                      <td> Jenis Kelamin </td>
                      <td> : {{ Auth::user()->pendaftar[0]->gender }} </td>
                    </tr>
                    <tr>
                      <td> Tanggal Lahir </td>
                      <td> : {{ Auth::user()->pendaftar[0]->birthdate }} </td>
                    </tr>
                    <tr>
                      <td> Nomor HP </td>
                      <td> : {{ Auth::user()->pendaftar[0]->phone }} </td>
                    </tr>
                    <tr>
                      <td> Email </td>
                      <td> : {{ Auth::user()->pendaftar[0]->email }} </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection