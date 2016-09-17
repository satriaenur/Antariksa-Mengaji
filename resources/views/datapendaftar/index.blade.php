@extends('admin.base')
@section('css')
    <style>
        td table tr td { margin: 1px;}
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-user"></i>
                    <h3 class="box-title">List Pendaftar</h3>
                    <div class="pull-right box-tools">
                        <div class="btn-group">
                            <a href="{{route('admin.pendaftar.export', ["L"])}}"
                               class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Export Ikhwan
                            </a>
                            <a href="{{route('admin.pendaftar.export', ["P"])}}"
                               class="btn btn-primary btn-sm"><i class="fa fa-download"></i> Export Akhwat
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <table id="user-table" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nomor Tiket</th>
                            <th>Nama Lengkap</th>
                            <th>Domisili</th>
                            <th>No. HP</th>
                            <th>Pekerjaan</th>
                            <th>Pendidikan</th>
                            <th>Usia</th>
                            <th>Angkatan</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $key => $user)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>
                                    {{ $user->kode_daftar }}
                                </td>
                                <td>
                                    {{$user->full_name}}
                                </td>
                                <td>
                                    {{$user->city->title}}
                                </td>
                                <td>
                                    {{$user->phone}}
                                </td>
                                <td>
                                    {{$user->pekerjaan}}
                                </td>
                                <td>
                                    {{$user->pendidikan}}
                                </td>
                                <td>
                                    {{ date("Y") - date("Y",strtotime($user->birthdate)) }}
                                </td>
                                <td>
                                    {{ $user->generasi }}
                                </td>
                                <td>
                                    <a href="{{route('pendaftar.edit', $user->id) }}" data-toggle='modal' >Edit</a> | <a href="{{route('pendaftar.detail', $user->id) }}" >Detail</a>
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
<!-- <table id="user-table" class="table table-bordered table-hover">
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
                                        <tr><td>Pendidikan Terakhir</td><td>: {{$user->pendidikan}}</td></tr>
                                        <tr><td>Pekerjaan</td><td>: {{$user->pekerjaan}}</td></tr>
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
                    </table> -->