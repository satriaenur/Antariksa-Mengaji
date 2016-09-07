<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Antariksa</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('bower_components/components-font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('bower_components/AdminLTE/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('bower_components/AdminLTE/plugins/iCheck/square/blue.css')}}">
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{asset('bower_components/AdminLTE/plugins/datepicker/datepicker3.css')}}">

    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('img/page-loader.gif') 50% 50% no-repeat rgb(249,249,249);
        }
    </style>
</head>
<body class="hold-transition login-page">
<div class="loader"></div>
<div class="login-box-responsive">
    <div class="login-logo" style="margin-bottom:30px">
        <img src="{{asset('img/logo-antariksa.png')}}" width="55%" style="display: block; margin: 2% auto;">
        <a href="#">Pendaftaran Program <b style="color:#e32531;">Antariksa</b></a>
    </div><!-- /.login-logo -->
    @include('alert')
    <div class="login-box-body">
        @yield('content')
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="{{asset('bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('bower_components/AdminLTE/plugins/iCheck/icheck.min.js')}}"></script>
<!-- Datepicker -->
<script src="{{asset('bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });

    $(".datepicker").datepicker({
        format: 'yyyy-mm-dd',
    });

    $("#select-province").on("change", function(e){
        var data = { province_id: $(this).val() };
        update_city_dropdown(data,1);
    });

    function update_city_dropdown(data,id){
        $.ajax({
            url: "{{ route('data.cities') }}",
            type: 'GET',
            data: data,
        })
        .done(function(cities) {
            $('#select-city').empty();
            for(i in cities) {
                kata = (cities[i].id == id)?"selected":"";
                $('#select-city').append('<option value="' + cities[i].id + '" '+ kata +' >' + cities[i].title + '</option>');
            }
        });
    }

    function getDataJalur(jalur){
        $.ajax({
            url: "{{ route('data.jalurdetail') }}",
            type: 'GET',
            data: {'id':jalur}
        })
        .done(function(data){
            $('#nama_jalur').html("<h3>" + data[0].name + "</h3>");
            $('#desc_jalur').html("<p>" + data[0].description + "</p>");
            $("#jalur_id").val(data[0].id);
            $("#detail_jalur").show();
        });
    }

    function pilihJalur(jalur){
        $("#pilih_jalur").hide();
        getDataJalur(jalur);
    }

    function backPaket(){
        $("#pilih_jalur").show();
        $("#detail_jalur").hide();
    }

    $(window).load(function() {
        $(".loader").fadeOut("slow");
    })

</script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-73406931-1', 'auto');
    ga('send', 'pageview');
</script>

@yield('js')
</body>
</html>