<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
	protected $fillable = [
		'name',
		'code',
		'quota_male',
		'quota_female',
		'generation'
	];
}
