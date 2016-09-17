@extends('admin.base')
@section('css')
    <style>
        td table tr td { margin: 1px;}
    </style>
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
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
            <div class="box box-success">
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
        <div class="col-xs-4">
            <div class="box box-danger">
                <div class="box-header">
                    <i class="fa fa-user"></i>
                    <h3 class="box-title">Statistik Jenis Kelamin</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                        @foreach($count_gender as $gender)
                            <tr><td>{{($gender->gender == 'L')? "Ikhwan" : "Akhwat"}}</td><td>: {{$gender->total}}</td></tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-user"></i>
                    <h3 class="box-title">Statistik Provinsi Pendaftar</h3>
                </div>
                <div class="box-body">
                      <div class="pad">
                        <!-- Map will be created here -->
                        <div id="world-map-markers" style="height: 325px;"></div>
                      </div>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="box box-success">
                <div class="box-header">
                    <i class="fa fa-user"></i>
                    <h3 class="box-title">Statistik Pekerjaan</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                        @foreach($count_pekerjaan as $pekerjaan)
                            <tr><td>{{ $pekerjaan->pekerjaan }}</td><td>: {{$pekerjaan->total}}</td></tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="box box-danger">
                <div class="box-header">
                    <i class="fa fa-user"></i>
                    <h3 class="box-title">Statistik Pendidikan Terakhir</h3>
                </div>
                <div class="box-body">
                    <table class="table">
                        @foreach($count_pendidikan as $pendidikan)
                            <tr><td>{{ $pendidikan->pendidikan }}</td><td>: {{$pendidikan->total}}</td></tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script>
        $('#world-map-markers').vectorMap({
        map: 'world_mill_en',
        normalizeFunction: 'polynomial',
        hoverOpacity: 0.7,
        hoverColor: false,
        backgroundColor: 'transparent',
        regionStyle: {
          initial: {
            fill: 'rgba(210, 214, 222, 1)',
            "fill-opacity": 1,
            stroke: 'none',
            "stroke-width": 0,
            "stroke-opacity": 1
          },
          hover: {
            "fill-opacity": 0.7,
            cursor: 'pointer'
          },
          selected: {
            fill: 'yellow'
          },
          selectedHover: {}
        },
        markerStyle: {
          initial: {
            fill: '#00a65a',
            stroke: '#111'
          }
        },
        markers: [
            @foreach($count_provinsi as $provinsi)
                {latLng: [{{ $provinsi->province_id->longitude }}, {{ $provinsi->province_id->latitude }}], name: '{{ $provinsi->province_id->title.': '.$provinsi->total }}'},
            @endforeach
        ]
        });
    </script>
@endsection