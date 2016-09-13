<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use App\User;
use App\Jalur;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    protected $redirectTo = '/home';

    public function __construct(Pendaftar $pendaftar, Jalur $jalur, User $user)
    {
        $this->pendaftar = $pendaftar;
        $this->jalur = $jalur;
        $this->user = $user;
    }

    public function index()
    {
        $data['jalurs'] = $this->jalur->all();
        return view('register.form_register', $data);
    }

    public function postStore(Requests\RegisterRequest $request) {
        $dataPendaftar = $request->except(['_token']);

        # get waiting list status based on quota
        $statusWaitingList = $this->setWaitingListStatus($request->get('gender'),$request->get('jalur_id'));

        $dataPendaftar['whatsapp'] = isset($dataPendaftar['whatsapp']) ? true : false;
        $dataPendaftar['telegram'] = isset($dataPendaftar['telegram']) ? true : false;
        $dataPendaftar['is_waiting_list'] = $statusWaitingList;

        $dataUser = $request->only(['email','phone','password']);
        $dataUser['name'] = $dataPendaftar['call_name'];
        $dataUser['password'] = bcrypt($dataUser['password']);

        $pendaftar = $this->pendaftar->create($dataPendaftar);
        $user = $this->user->create($dataUser);
        $pendaftar->user_id = $user->id;
        $pendaftar->save();

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
