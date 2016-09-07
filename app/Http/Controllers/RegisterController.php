<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use App\User;
use App\Jalur;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class RegisterController extends Controller
{
    use AuthenticatesAndRegistersUsers;

    protected $redirectTo = '/home';

    public function __construct(Pendaftar $pendaftar, Jalur $jalur)
    {
        $this->pendaftar = $pendaftar;
        $this->jalur = $jalur;
    }

    public function index()
    {
        $data['jalurs'] = $this->jalur->all();
        return view('register.form_register', $data);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'phone' => 'required|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => bcrypt($data['password']),
        ]);
    }



    public function postStore(Requests\RegisterRequest $request) {
        $dataPendaftar = $request->except(['_token']);

        # get waiting list status based on quota
        $statusWaitingList = $this->setWaitingListStatus($request->get('gender'),$request->get('jalur_id'));

        $dataPendaftar['whatsapp'] = isset($dataPendaftar['whatsapp']) ? true : false;
        $dataPendaftar['telegram'] = isset($dataPendaftar['telegram']) ? true : false;
        $dataPendaftar['is_waiting_list'] = $statusWaitingList;

        $request['name'] = $dataPendaftar['call_name'];
        
        $validator = $this->validator($request->all());
        if ($validator->fails()) {
           $this->throwValidationException(
               $request, $validator
           );
        }

        $pendaftar = $this->pendaftar->create($dataPendaftar);
        $this->postRegister($request);
        $jalur = $this->jalur->find($dataPendaftar['jalur_id']);
        if ($dataPendaftar['gender'] == "L") {
            $jalur->posisi_ikhwan = $jalur->posisi_ikhwan + 1;
            $nomorurut = $jalur->posisi_ikhwan;
        }else{
            $jalur->posisi_akhwat = $jalur->posisi_akhwat + 1;
            $nomorurut = $jalur->posisi_akhwat;
        }
        $jalur->save();


        $asalkota= $pendaftar->city;
        $kodejalur = $nomorurut.$dataPendaftar['gender'].". ".$jalur->code." ".$pendaftar->full_name." ".$asalkota->title;
        $tanggalpendaftaran = $pendaftar->created_at;
        $result = [
            "kode" => $kodejalur,
            "tanggal" => date_format($tanggalpendaftaran,"Y/m/d H:i:s"),
            "jalur" => $jalur->name, 
            "status_daftar" => $statusWaitingList
        ];

        return back()->with($result);
    }

    private function setWaitingListStatus($gender,$jalur_id)
    {
        $jalur = $this->jalur
        ->where("id",$jalur_id)
        ->get()[0];
        $total = ($gender == "L") ? $jalur->posisi_ikhwan+1 : $jalur->posisi_akhwat+1;
        $max = ($gender == "L") ? $jalur->quota_male : $jalur->quota_female;
        return (($total >= $max) and ($jalur->is_waiting));
    }
}
