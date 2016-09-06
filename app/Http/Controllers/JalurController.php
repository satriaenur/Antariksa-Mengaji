<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jalur;
use App\Pendaftar;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class JalurController extends Controller
{
	public function __construct(Jalur $jalur, Pendaftar $pendaftar){
		$this->jalur = $jalur;
		$this->pendaftar = $pendaftar;
	}

	public function getDetailJalur(Request $request){
        $id = $request->get('id');
        $jalur = $this->jalur
            ->where('id',$id)
            ->get()
            ->toArray();
        return response()->json($jalur);
	}
}
