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
		'generation_ikhwan',
		'generation_akhwat',
		'posisi_ikhwan',
		'posisi_akhwat',
		'pendaftar_ikhwan',
		'pendaftar_akhwat'
	];

	public function pendaftar(){
		return $this->hasMany('App\Pendaftar');
	}
}
