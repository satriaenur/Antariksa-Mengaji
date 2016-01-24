<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    public function province()
    {
        return $this->belongsTo('App\Province', 'province_id', 'id');
    }
}
