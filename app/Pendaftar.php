<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table= 'pendaftars';

    protected $fillable = [
        'full_name',
        'call_name',
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
        'instagram'
    ];

    public function city()
    {
        return $this->hasOne('App\City', 'city_id', 'id');
    }

    public function province()
    {
        return $this->hasOne('App\Province', 'province_id', 'id');
    }
}
