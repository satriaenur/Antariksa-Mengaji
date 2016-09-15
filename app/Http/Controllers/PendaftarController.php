<?php

namespace App\Http\Controllers;

use Pendaftar;
use User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PendaftarController extends Controller
{
	public function index(){
		return view('user.index');
	}
	public function status(){
		return view('user.status');
	}
	public function materi(){
		return view('user.materi');
	}
	public function kuis(){
		return view('user.kuis');
	}
	public function nilai(){
		return view('user.nilai');
	}
	public function profile(){
		return view('user.profile');
	}
}
