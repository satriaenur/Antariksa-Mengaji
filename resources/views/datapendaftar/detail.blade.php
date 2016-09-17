@extends('admin.base')
@section('css')
    <style>
        td table tr td { margin: 1px;}
        dl {
          width: 100%;
          overflow: hidden;
          padding: 0;
          margin: 0
        }
        dt {
          float: left;
          width: 30%;
          /* adjust the width; make sure the total of both is 100% */
          padding: 0;
          margin: 0
        }
        dd {
          float: left;
          width: 50%;
          /* adjust the width; make sure the total of both is 100% */
          padding: 0;
          margin: 0
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-user"></i>
                    <h3 class="box-title">Detail</h3>
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <h4>Informasi Pribadi</h4>
                        <dl>
                            <dt>Nama Lengkap</dt>  <dd>{{$user->full_name}}</dd>
                            <dt>Nama Panggilan</dt>  <dd>{{$user->call_name}}</dd>
                            <dt>Tanggal Lahir</dt>  <dd>{{$user->birthdate}}</dd>
                            <dt>Jenid Kelamin</dt>  <dd>{{$user->gender}}</dd>
                            <dt>Pendidikan</dt>  <dd>{{$user->pendidikan}}</dd>
                            <dt>Pekerjaan</dt>  <dd>{{$user->pekerjaan}}</dd>
                            <dt>Alamat</dt>  <dd>{{$user->address}}</dd>
                            <dt>Kota</dt>  <dd>{{$user->city->title}}</dd>
                        </dl>
                        <br>
                        <h4>Pengalaman dan Harapan</h4>
                        <dl >
                            <dt>Pengalaman</dt>  <dd>{{$user->experience}}</dd>
                            <dt>Harapan</dt>  <dd>{{$user->expectation}}</dd>
                        </dl>
                    </div>
                    <div class="col-md-6">
                        <h4>Kontak</h4>
                        <dl >
                            <dt>Telepon</dt>  <dd>{{$user->phone}}</dd>
                            <dt>Email</dt>  <dd>{{$user->email}}</dd>
                            <dt>Facebook</dt>  <dd>{{$user->fb}}</dd>
                            <dt>Twitter</dt>  <dd>{{$user->twitter}}</dd>
                            <dt>Instagram</dt>  <dd>{{$user->instagram}}</dd>
                        </dl>
                        <br>
                        <h4>Keterangan</h4>
                        <dl >
                            <dt>Whatsapp</dt>  <dd>{{$user->whatsapp==1 ? "Ya":"Tidak"}}</dd>
                            <dt>Telegram</dt>  <dd>{{$user->telegram==1 ? "Ya":"Tidak"}}</dd>
                            <dt>Tipe HP</dt>  <dd>{{$user->platform}}</dd>
                        </dl>
                    </div>
                    
                </div>
            </div>
            <p> 
                <a href="{{ route('pendaftar.index') }}" type="submit" button type="button" class="btn btn-warning">Back to List</a>
            </p>
        </div>
    </div>
@endsection

@section('js')
    <script>
    </script>
@endsection