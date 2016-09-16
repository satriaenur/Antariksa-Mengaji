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
		$data['page_title'] = "Berita";
		return view('user.index',$data);
	}
	public function status(){
		$data['page_title'] = "Status";
		return view('user.status',$data);
	}
	public function materi(){
		$data['page_title'] = "Materi";
		return view('user.materi',$data);
	}
	public function kuis(){
		$data['page_title'] = "Kuis";
		return view('user.kuis',$data);
	}
	public function nilai(){
		$data['page_title'] = "Nilai";
		return view('user.nilai',$data);
	}
	public function profile(){
		$data['page_title'] = "Profile";
		return view('user.profile',$data);
	}
}
