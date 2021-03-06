<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table= 'pendaftars';

    protected $fillable = [
        'full_name',
        'call_name',
        'gender',
        'birthdate',
        'phone',
        'email',
        'address',
        'province_id',
        'city_id',
        'time_zone',
        'platform',
        'whatsapp',
        'telegram',
        'experience',
        'expectation',
        'fb',
        'twitter',
        'instagram', 
        'pendidikan',
        'pekerjaan',
        'jalur_id',
        'is_waiting_list',
        'user_id',
        'generasi',
        'kode_daftar'
    ];

    public function city()
    {
        return $this->hasOne('App\City', 'id', 'city_id');
    }

    public function province()
    {
        return $this->hasOne('App\Province', 'id', 'province_id');
    }

    public function jalur()
    {
        return $this->belongsTo('App\Jalur');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
