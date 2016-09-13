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
}
