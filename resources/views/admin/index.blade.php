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
@endsection

@section('js')
    <script>
        // $("#user-table").dataTable();
    </script>
@endsection