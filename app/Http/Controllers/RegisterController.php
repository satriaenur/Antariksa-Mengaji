<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function __construct(Pendaftar $pendaftar)
    {
        $this->pendaftar = $pendaftar;
    }

    public function index(Request $request)
    {
        return view('register.form_register');
    }

    public function postStore(Requests\RegisterRequest $request) {
        $dataPendaftar = $request->except(['_token']);
        $dataPendaftar['whatsapp'] = isset($dataPendaftar['whatsapp']) ? true : false;
        $dataPendaftar['telegram'] = isset($dataPendaftar['telegram']) ? true : false;
        $this->pendaftar->create($dataPendaftar);
        return back()->with(MSG_SUCCESS, 'Pendaftaran berhasil');
    }
}
