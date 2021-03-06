<?php

namespace App\Http\Controllers;

use DB;
use App\Pendaftar;
use App\Http\Requests;
use App\User;
use App\Province;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function __construct(Pendaftar $pendaftar)
    {
        $this->middleware('auth');
        $this->pendaftar = $pendaftar;
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required',
            'phone' => 'required',
        ]);
    }

    public function index()
    {
        $page_title = 'Dashboard';
        $users = $this->pendaftar->all();

        $count_pendaftar = $this->pendaftar->count();
        $count_whatsapp = $this->pendaftar->where('whatsapp', 1)->count();
        $count_telegram = $this->pendaftar->where('telegram', 1)->count();
        $count_android = $this->pendaftar->where('platform', 'android')->count();
        $count_ios = $this->pendaftar->where('platform', 'ios')->count();
        $count_bb = $this->pendaftar->where('platform', 'blackberry')->count();
        $count_gender = $this->pendaftar->groupBy('gender')->select('gender',DB::raw('count(*) as total'))->get();
        $count_pekerjaan = $this->pendaftar->groupBy('pekerjaan')->select('pekerjaan',DB::raw('count(*) as total'))->get();
        $count_pendidikan = $this->pendaftar->groupBy('pendidikan')->select('pendidikan',DB::raw('count(*) as total'))->get();
        $count_provinsi = $this->pendaftar->groupBy('province_id')->select('province_id',DB::raw('count(*) as total'))->get();
        foreach ($count_provinsi as $provinsi) {
            $provinsi->province_id = Province::find($provinsi->province_id);
        }

        $compact = compact(
            'users', 'page_title', 'count_pendaftar', 'count_telegram', 'count_whatsapp',
            'count_android', 'count_ios', 'count_bb', 'count_gender', 'count_pekerjaan', 'count_provinsi', 'count_pendidikan'
        );

        return view('admin.index', $compact);
    }

    public function exportRekap($gender)
    {
        $date = date("d-m-Y");

        $genderTitle = $gender=='L' ? 'Ikhwan' : 'Akhwat';
        $param['title'] = "Rekap Pendaftar Antariksa - {$genderTitle} - $date";
        $param['dataPendaftar'] = $this->pendaftar
            ->where('gender', $gender)
            ->get();

        $file_name = "Rekap Pendaftar Antariksa - {$genderTitle} - {$date}";

        return Excel::create($file_name, function($excel) use ($param) {
            $excel->setTitle($param['title']);
            $excel->sheet('New sheet', function($sheet) use ($param) {
                $sheet->setAllBorders('thin');
                $sheet->setPageMargin(0.25);

                $data['pendaftar'] = $param['dataPendaftar'];

                $sheet->loadView('export.rekap')->with($data);
            });
        })->export('xls');
    }

    public function testExport()
    {
        $data['pendaftar'] = Pendaftar::all();
        return view('export.rekap')->with($data);
    }

    public function data()
    {
        $page_title = 'Pendaftar Antariksa';
        $users = $this->pendaftar->all();
        $compact = compact(
            'users','page_title'
        );

        return view('datapendaftar.index', $compact);
    }
    public function detail($id)
    {
        $page_title = 'Pendaftar Antariksa';
        $user = Pendaftar::findOrFail($id);
        $compact = compact(
            'user','page_title'
        );
        return view('datapendaftar.detail',$compact);
    }

    public function edit($id)
    {
        $page_title = 'Pendaftar Antariksa';
        $user = Pendaftar::findOrFail($id);
        $account = User::findOrFail($user->user_id);

        $compact = compact(
            'user','page_title','account'
        );
        return view('datapendaftar.edit',$compact);
    }

    public function update($id, RegisterRequest $request)
    {
        $user = Pendaftar::findOrFail($id);
        $input = $request->all();
        $input['whatsapp'] = isset($input['whatsapp']) ? true : false;
        $input['telegram'] = isset($input['telegram']) ? true : false;

        $account = User::findOrFail($user->user_id);
        $dataAccount = $request->only(['email','phone','password']);
        $dataAccount['name'] = $input['call_name'];
        

        $account->fill($dataAccount)->save();
        $user->fill($input)->save();
        return redirect()->route('pendaftar.index');
    }
}
