<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function __construct(Pendaftar $pendaftar)
    {
        $this->middleware('auth');
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
        $date = date("d-m-Y");
        $param['title'] = "Rekap Pendaftar Antariksa";
        $file_name = "Rekap Pendaftar Antariksa - {$date}";

        return Excel::create($file_name, function($excel) use ($param) {
            $excel->setTitle($param['title']);
            $excel->sheet('New sheet', function($sheet) use ($param) {
                $sheet->setAllBorders('thin');
                $sheet->setPageMargin(0.25);

                $data['pendaftar'] = Pendaftar::all();

                $sheet->loadView('export.rekap')->with($data);
            });
        })->export('xls');
    }

    public function testExport()
    {
        $data['pendaftar'] = Pendaftar::all();
        return view('export.rekap')->with($data);
    }
}
