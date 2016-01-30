<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct(Pendaftar $pendaftar)
    {
        $this->pendaftar = $pendaftar;
    }

    public function index()
    {
        $page_title = 'Data Pendaftar Antariksa';
        $users = $this->pendaftar->all();

        $count_pendaftar = $this->pendaftar->count();
        $count_whatsapp = $this->pendaftar->where('whatsapp', 1)->count();
        $count_telegram = $this->pendaftar->where('telegram', 1)->count();
        $count_android = $this->pendaftar->where('platform', 'android')->count();
        $count_ios = $this->pendaftar->where('platform', 'ios')->count();
        $count_bb = $this->pendaftar->where('platform', 'blackberry')->count();

        $compact = compact(
            'users', 'page_title', 'count_pendaftar', 'count_telegram', 'count_whatsapp',
            'count_android', 'count_ios', 'count_bb'
        );

        return view('admin.index', $compact);
    }

    public function exportRekap()
    {
        
    }
}
