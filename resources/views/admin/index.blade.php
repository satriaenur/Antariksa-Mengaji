@extends('admin.base')
@section('css')
    <style>
        td table tr td { margin: 1px;}
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-4">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-user"></i>
                    <h3 class="box-title">Statistik Umum</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                        <tr><td>Jumlah Pendaftar</td><td>: {{$count_pendaftar}}</td></tr>
                        <tr><td>Pengguna Whatsapp</td><td>: {{$count_whatsapp}}</td></tr>
                        <tr><td>Pengguna Telegram</td><td>: {{$count_telegram}}</td></tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-user"></i>
                    <h3 class="box-title">Statistik Platform</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                        <tr><td>Pengguna Android</td><td>: {{$count_android}}</td></tr>
                        <tr><td>Pengguna iPhone/iOS</td><td>: {{$count_ios}}</td></tr>
                        <tr><td>Pengguna Blacberry</td><td>: {{$count_bb}}</td></tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-user"></i>
                    <h3 class="box-title">Data Pendaftar</h3>
                    <div class="pull-right box-tools">
                        <a href="#" onClick="oTable.fnReloadAjax()" class="btn btn-primary btn-sm"><i class="fa fa-refresh"></i></a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="user-table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Data Pribadi</th>
                            <th>Kontak</th>
                            <th width="15%">Keterangan</th>
                            <th width="15%">Pengalaman & Harapan</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    <table>
                                        <tr><td>Nama Lengkap</td><td>: {{$user->full_name}}</td></tr>
                                        <tr><td>Nama Panggilan</td><td>: {{$user->call_name}}</td></tr>
                                        <tr><td>Tgl Lahir</td><td>: {{$user->birthdate}}</td></tr>
                                        <tr><td>Alamat</td><td>: {{$user->address}}</td></tr>
                                        <tr><td>Kota</td><td>: {{$user->city->title}}</td></tr>
                                        <tr><td>Provinsi</td><td>: {{$user->province->title}}</td></tr>
                                        <tr><td>Zona Waktu</td><td>: {{$user->time_zone}}</td></tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr><td>Telpon</td><td>: {{$user->phone}}</td></tr>
                                        <tr><td>Email</td><td>: {{$user->email}}</td></tr>
                                        <tr><td>FB</td><td>: {{$user->fb}}</td></tr>
                                        <tr><td>Twitter</td><td>: {{$user->twitter}}</td></tr>
                                        <tr><td>Instagram</td><td>: {{$user->instagram}}</td></tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr><td>Whatsapp</td><td>: {{$user->whatsapp==1 ? "Yes" : "No"}}</td></tr>
                                        <tr><td>Telegram</td><td>: {{$user->telegram==1 ? "Yes" : "No"}}</td></tr>
                                        <tr><td>Tipe HP</td><td>: {{$user->platform}}</td></tr>
                                    </table>
                                </td>
                                <td>
                                    <table>
                                        <tr><td><b>Pengalaman:</b> {{$user->experience}}</td></tr>
                                        <tr><td><b>Harapan:</b> {{$user->expectation}}</td></tr>
                                    </table>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $("#user-table").dataTable();
    </script>
@endsection