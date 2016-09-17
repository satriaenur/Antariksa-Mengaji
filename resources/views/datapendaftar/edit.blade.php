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
                    <h3 class="box-title">Edit Pendaftar</h3>
                </div>
                <div class="box-body">
                    <form method="POST" action="{{route('pendaftar.update', $user->id)}}" method="post" id="form-edit" autocomplete="off">
                    {{ csrf_field() }}

                        <input type="hidden" class="form-control" placeholder="" name="password" value="{{$account->password}}">
                        <input type="hidden" class="form-control" placeholder="" name="password_confirmation" value="{{$account->password}}">
                    

                        <h4 class="text-bold">Informasi Pribadi</h4><hr>
                        <input type="hidden" value="{{ $user->id }}" name="id"/>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }} has-feedback">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="" name="full_name" value="{{ (old('full_name'))=="" ? $user->full_name : old('full_name') }}">
                                    @if ($errors->has('full_name'))
                                        <span class="help-block"><strong>{{ $errors->first('full_name') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group{{ $errors->has('call_name') ? ' has-error' : '' }} has-feedback">
                                    <label>Nama Panggilan</label>
                                    <input type="text" class="form-control" placeholder="" name="call_name" value="{{ (old('call_name'))=="" ? $user->call_name : old('call_name') }}">
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
                                <option value="L" {{(old('gender') or $user->gender =="L")?"selected":""}}>Laki-Laki</option>
                                <option value="P" {{(old('gender') or $user->gender =="P")?"selected":""}}>Perempuan</option>
                            </select>
                            @if ($errors->has('gender'))
                                <span class="help-block"><strong>{{ $errors->first('gender') }}</strong></span>
                            @endif
                        </div>

                        {{--Birtdate--}}
                        <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }} has-feedback">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control datepicker" placeholder="" name="birthdate" value="{{ (old('birthdate'))=="" ? $user->birthdate : old('birthdate')}}">
                            @if ($errors->has('birthdate'))
                                <span class="help-block"><strong>{{ $errors->first('birthdate') }}</strong></span>
                            @endif
                        </div>

                        {{--Pendidikan--}}
                        <div class="form-group{{ $errors->has('pendidikan') ? ' has-error' : '' }} has-feedback">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" name="pendidikan">
                                <option value="SD" {{(old('pendidikan') or $user->pendidikan =="SD")?"selected":""}}>SD</option>
                                <option value="SMP" {{(old('pendidikan') or $user->pendidikan =="SMP")?"selected":""}}>SMP</option>
                                <option value="SMA" {{(old('pendidikan') or $user->pendidikan =="SMA")?"selected":""}}>SMA</option>
                                <option value="S1" {{(old('pendidikan') or $user->pendidikan =="S1")?"selected":""}}>S1</option>
                                <option value="S2" {{(old('pendidikan') or $user->pendidikan =="S2")?"selected":""}}>S2</option>
                                <option value="S3" {{(old('pendidikan') or $user->pendidikan =="S3")?"selected":""}}>S3</option>
                            </select>
                            @if ($errors->has('pendidikan'))
                                <span class="help-block"><strong>{{ $errors->first('pendidikan') }}</strong></span>
                            @endif
                        </div>

                        {{--Pekerjaan--}}
                        <div class="form-group{{ $errors->has('pekerjaan') ? ' has-error' : '' }} has-feedback">
                            <label>Pekerjaan</label>
                            <input type="text" class="form-control" placeholder="" name="pekerjaan" value="{{ (old('pekerjaan'))=="" ? $user->pekerjaan : old('pekerjaan') }}">
                            @if ($errors->has('pekerjaan'))
                                <span class="help-block"><strong>{{ $errors->first('pekerjaan') }}</strong></span>
                            @endif
                        </div>



                        {{--Phone--}}
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} has-feedback">
                            <label>No Handphone</label>
                            <input type="text" class="form-control" placeholder="" name="phone" value="{{ (old('phone'))=="" ? $user->phone : old('phone') }}">
                            @if ($errors->has('phone'))
                                <span class="help-block"><strong>{{ $errors->first('phone') }}</strong></span>
                            @endif
                        </div>

                        {{--Email--}}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                            <label>Alamat Email</label>
                            <input type="email" class="form-control" placeholder="" name="email" value="{{ (old('email'))=="" ? $user->email : old('email') }}">
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
                                    <input type="text" class="form-control" placeholder="" name="fb" value="{{ (old('fb'))=="" ? $user->fb : old('fb') }}">
                                    <span class="fa fa-facebook form-control-feedback"></span>
                                    @if ($errors->has('fb'))
                                        <span class="help-block"><strong>{{ $errors->first('fb') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group{{ $errors->has('twitter') ? ' has-error' : '' }} has-feedback">
                                    <input type="text" class="form-control" placeholder="" name="twitter" value="{{ (old('twitter'))=="" ? $user->twitter : old('twitter') }}">
                                    <span class="fa fa-twitter form-control-feedback"></span>
                                    @if ($errors->has('twitter'))
                                        <span class="help-block"><strong>{{ $errors->first('twitter') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group{{ $errors->has('instagram') ? ' has-error' : '' }} has-feedback">
                                    <input type="text" class="form-control" placeholder="" name="instagram" value="{{ (old('instagram'))=="" ? $user->instagram : old('instagram') }}">
                                    <span class="fa fa-instagram form-control-feedback"></span>
                                    @if ($errors->has('instagram'))
                                        <span class="help-block"><strong>{{ $errors->first('instagram') }}</strong></span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} has-feedback">
                            <label>Alamat Domisili</label>
                            <textarea class="form-control desc" placeholder="" name="address">{{ (old('address'))=="" ? $user->address : old('address') }}</textarea>
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
                                            <option value="{{$province->id}}" {{(old('province_id') or $user->province_id == $province->id)?"selected":""}}>{{$province->title}}</option>
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
                                <option value="WIB" {{(old('time_zone') or $user->time_zone  == "WIB")?"selected":""}}>WIB</option>
                                <option value="WITA" {{(old('time_zone') or $user->time_zone == "WITA")?"selected":""}}>WITA</option>
                                <option value="WIT" {{(old('time_zone') or $user->time_zone == "WIT")?"selected":""}}>WIT</option>
                                <option value="LN" {{(old('time_zone') or $user->time_zone == "LN")?"selected":""}}>Luar Negeri</option>
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
                                <option value="android" {{(old('platform')=="android")?"selected":""}}>Android</option>
                                <option value="ios" {{(old('platform')=="ios")?"selected":""}}>iPhone (iOS)</option>
                                <option value="blackberry" {{(old('platform')=="blackberry")?"selected":""}}>Blackberry</option>
                                <option value="other" {{(old('platform')=="other")?"selected":""}}>Lainnya</option>
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
                                            <input type="checkbox" name="whatsapp" value="whatsapp" {{(old('whatsapp') or $user->whatsapp == 1)?"checked":""}}> WhatsApp</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="checkbox icheck {{ $errors->has('telegram') ? ' has-error' : '' }}">
                                        <label>
                                            <input type="checkbox" name="telegram" value="telegram" {{(old('telegram') or $user->telegram == 1 )?"checked":""}}> Telegram</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }} has-feedback">
                            <label>Apakah Anda sudah pernah belajar Tajwid atau Tahsin sebelumnya? Jika sudah, bagaimana pengalamannya?</label>
                            <textarea class="form-control desc" placeholder="" name="experience">{{(old('experience'))=="" ? $user->experience : old('experience')}}</textarea>
                            @if ($errors->has('experience'))
                                <span class="help-block"><strong>{{ $errors->first('experience') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('expectation') ? ' has-error' : '' }} has-feedback">
                            <label>Apa harapan Anda mengikuti Program Antariksa?</label>
                            <textarea class="form-control desc" placeholder="" name="expectation">{{(old('expectation'))=="" ? $user->expectation : old('expectation')}}</textarea>
                            @if ($errors->has('expectation'))
                                <span class="help-block"><strong>{{ $errors->first('expectation') }}</strong></span>
                            @endif
                        </div>

                        <input type="hidden" id="jalur_id" name="jalur_id" value="{{ old('jalur_id') }}"/>

                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary btn-block btn-flat"
                                        style="background: #3c8dbc; border: #3c8dbc;"
                                ><h4>Update</h4></button>
                            </div>
                        </div>
                    </form> 
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
        $(document).ready(function(e){
            var data = { province_id: {{(old('province_id')) ? old('province_id') : (($user->province_id) ? $user->province_id:"1")  }} };
            update_city_dropdown(data, {{(old('city_id'))?old('city_id'):(($user->city_id) ? $user->city_id:"1")}});
        });
    </script>
@endsection