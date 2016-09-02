@extends('register.base')

@section('content')
    <form method="POST" action="{{route('register.store')}}" method="post" id="form-login" autocomplete="off">
    {{ csrf_field() }}
        <h4 class="text-bold">Informasi Pribadi</h4><hr>

        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }} has-feedback">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" placeholder="" name="full_name" value="{{ old('full_name') }}">
                    @if ($errors->has('full_name'))
                        <span class="help-block"><strong>{{ $errors->first('full_name') }}</strong></span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group{{ $errors->has('call_name') ? ' has-error' : '' }} has-feedback">
                    <label>Nama Panggilan</label>
                    <input type="text" class="form-control" placeholder="" name="call_name" value="{{ old('call_name') }}">
                    @if ($errors->has('call_name'))
                        <span class="help-block"><strong>{{ $errors->first('call_name') }}</strong></span>
                    @endif
                </div>
            </div>
        </div>

        {{--Gender--}}
        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }} has-feedback">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="gender">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
            @if ($errors->has('gender'))
                <span class="help-block"><strong>{{ $errors->first('gender') }}</strong></span>
            @endif
        </div>

        {{--Birtdate--}}
        <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }} has-feedback">
            <label>Tanggal Lahir</label>
            <input type="text" class="form-control datepicker" placeholder="" name="birthdate" value="{{ old('birthdate') }}">
            @if ($errors->has('birthdate'))
                <span class="help-block"><strong>{{ $errors->first('birthdate') }}</strong></span>
            @endif
        </div>

        {{--Pendidikan--}}
        <div class="form-group{{ $errors->has('pendidikan') ? ' has-error' : '' }} has-feedback">
            <label>Pendidikan Terakhir</label>
            <select class="form-control" name="pendidikan">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
            @if ($errors->has('pendidikan'))
                <span class="help-block"><strong>{{ $errors->first('pendidikan') }}</strong></span>
            @endif
        </div>

        {{--Pekerjaan--}}
        <div class="form-group{{ $errors->has('pekerjaan') ? ' has-error' : '' }} has-feedback">
            <label>Pekerjaan</label>
            <input type="text" class="form-control" placeholder="" name="pekerjaan" value="{{ old('pekerjaan') }}">
            @if ($errors->has('pekerjaan'))
                <span class="help-block"><strong>{{ $errors->first('pekerjaan') }}</strong></span>
            @endif
        </div>



        {{--Phone--}}
        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} has-feedback">
            <label>No Handphone</label>
            <input type="text" class="form-control" placeholder="" name="phone" value="{{ old('phone') }}">
            @if ($errors->has('phone'))
                <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
            @endif
        </div>

        {{--Email--}}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
            <label>Alamat Email</label>
            <input type="email" class="form-control" placeholder="" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
            @endif
        </div>

        {{--Social Media--}}
        <div class="row">
            <div class="col-xs-12">
                <label>Akun Media Sosial</label>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="form-group{{ $errors->has('fb') ? ' has-error' : '' }} has-feedback">
                    <input type="text" class="form-control" placeholder="" name="fb" value="{{ old('fb') }}">
                    <span class="fa fa-facebook form-control-feedback"></span>
                    @if ($errors->has('fb'))
                        <span class="help-block"><strong>{{ $errors->first('fb') }}</strong></span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }} has-feedback">
                    <input type="text" class="form-control" placeholder="" name="twitter" value="{{ old('twitter') }}">
                    <span class="fa fa-twitter form-control-feedback"></span>
                    @if ($errors->has('twitter'))
                        <span class="help-block"><strong>{{ $errors->first('twitter') }}</strong></span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="form-group{{ $errors->has('instagram') ? ' has-error' : '' }} has-feedback">
                    <input type="text" class="form-control" placeholder="" name="instagram" value="{{ old('instagram') }}">
                    <span class="fa fa-instagram form-control-feedback"></span>
                    @if ($errors->has('instagram'))
                        <span class="help-block"><strong>{{ $errors->first('instagram') }}</strong></span>
                    @endif
                </div>
            </div>
        </div>

        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} has-feedback">
            <label>Alamat Domisili</label>
            <textarea class="form-control desc" placeholder="" name="address" value="{{ old('address') }}"></textarea>
            @if ($errors->has('address'))
                <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
            @endif
        </div>

        {{--Province & City--}}
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group{{ $errors->has('province_id') ? ' has-error' : '' }} has-feedback">
                    <label>Provinsi</label>
                    <select class="form-control" name="province_id" id="select-province">
                        @foreach(\App\Province::all() as $province)
                            <option value="{{$province->id}}">{{$province->title}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('province_id'))
                        <span class="help-block"><strong>{{ $errors->first('province_id') }}</strong></span>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }} has-feedback">
                    <label>Kota</label>
                    <select class="form-control" name="city_id" id="select-city"></select>
                    @if ($errors->has('city'))
                        <span class="help-block"><strong>{{ $errors->first('city') }}</strong></span>
                    @endif
                </div>
            </div>
        </div>

        {{--Time Zone--}}
        <div class="form-group{{ $errors->has('time_zone') ? ' has-error' : '' }} has-feedback">
            <label>Zona Waktu</label>
            <select class="form-control" name="time_zone">
                <option value="WIB">WIB</option>
                <option value="WITA">WITA</option>
                <option value="WIT">WIT</option>
                <option value="LN">Luar Negeri</option>
            </select>
            @if ($errors->has('time_zone'))
                <span class="help-block"><strong>{{ $errors->first('time_zone') }}</strong></span>
            @endif
        </div>

        <h4 class="text-bold" style="margin-top:40px">Pertanyaan Umum</h4>
        <hr>
        <div class="form-group{{ $errors->has('platform') ? ' has-error' : '' }} has-feedback">
            <label>Apa jenis HP yang Anda gunakan?</label>
            <select class="form-control" name="platform">
                <option value="android">Android</option>
                <option value="ios">iPhone (iOS)</option>
                <option value="blackberry">Blackberry</option>
                <option value="other">Lainnya</option>
            </select>
            @if ($errors->has('platform'))
                <span class="help-block"><strong>{{ $errors->first('platform') }}</strong></span>
            @endif
        </div>

        <div class="row">
            <div class="form-group {{ $errors->has('expectation') ? ' has-error' : '' }}">
                <div class="col-xs-12">
                    <label>Dari kedua aplikasi di bawah ini, mana yang sudah terinstall di HP Anda?</label>
                </div>
                <div class="col-xs-4">
                    <div class="checkbox icheck {{ $errors->has('whatsapp') ? ' has-error' : '' }}">
                        <label>
                            <input type="checkbox" name="whatsapp" value="whatsapp"> WhatsApp</a>
                        </label>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="checkbox icheck {{ $errors->has('telegram') ? ' has-error' : '' }}">
                        <label>
                            <input type="checkbox" name="telegram" value="telegram"> Telegram</a>
                        </label>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }} has-feedback">
            <label>Apakah Anda sudah pernah belajar Tajwid atau Tahsin sebelumnya? Jika sudah, bagaimana pengalamannya?</label>
            <textarea class="form-control desc" placeholder="" name="experience">{{old('experience')}}</textarea>
            @if ($errors->has('experience'))
                <span class="help-block"><strong>{{ $errors->first('experience') }}</strong></span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('expectation') ? ' has-error' : '' }} has-feedback">
            <label>Apa harapan Anda mengikuti Program Antariksa?</label>
            <textarea class="form-control desc" placeholder="" name="expectation">{{old('expectation')}}</textarea>
            @if ($errors->has('expectation'))
                <span class="help-block"><strong>{{ $errors->first('expectation') }}</strong></span>
            @endif
        </div>


        <div class="row">
            <div class="col-xs-12">
                <button type="submit" class="btn btn-primary btn-block btn-flat"
                        style="background: #e32531; border: #e32531;"
                ><h4>Daftar sekarang</h4></button>
            </div>
        </div>
</form>
@endsection
@section('js')
    <script>
        $(document).ready(function(e){
            var data = { province_id: 1 };
            update_city_dropdown(data);
        });
    </script>
@endsection