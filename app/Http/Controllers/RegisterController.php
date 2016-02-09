<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    const MAX_IKHWAN = 150;
    const MAX_AKWAT = 300;

    public function __construct(Pendaftar $pendaftar)
    {
        $this->pendaftar = $pendaftar;
    }

    public function index()
    {
        $sisaQuotaIkhwan = self::MAX_IKHWAN - $this->countPendaftar("L");
        $sisaQuotaAkhwat = self::MAX_AKWAT - $this->countPendaftar("P");

        $statusQuotaIkhwan = $sisaQuotaIkhwan <= 0 ? 0 : $sisaQuotaIkhwan;
        $statusQuotaAkhwat = $sisaQuotaAkhwat <= 0 ? 0 : $sisaQuotaAkhwat;
        return view('register.form_register', compact('statusQuotaIkhwan', 'statusQuotaAkhwat'));
    }

    public function postStore(Requests\RegisterRequest $request) {
        $dataPendaftar = $request->except(['_token']);

        # get waiting list status based on quota
        $statusWaitingList = $this->setWaitingListStatus($request->get('gender'));

        $dataPendaftar['whatsapp'] = isset($dataPendaftar['whatsapp']) ? true : false;
        $dataPendaftar['telegram'] = isset($dataPendaftar['telegram']) ? true : false;
        $dataPendaftar['is_waiting_list'] = $statusWaitingList;

        $this->pendaftar->create($dataPendaftar);

        if ($statusWaitingList == true) {
            $message = "Karena kuota pendaftar sudah penuh, Anda masuk ke dalam waiting list. Kami akan menghubungi Anda jika terdapat kuota tambahan";
        } else {
            $message = "Pendaftaran berhasil";
        }

        return back()->with(MSG_SUCCESS, $message);
    }

    private function setWaitingListStatus($gender)
    {
        $countPendaftar = $this->countPendaftar($gender);
        $maxPendaftar = ($gender == "L") ? self::MAX_IKHWAN : self::MAX_AKWAT;
        return $countPendaftar >= $maxPendaftar ? true : false;
    }

    private function countPendaftar($gender)
    {
        return $this->pendaftar
            ->where('gender', $gender)
//            ->where('is_waiting_list', false)
            ->count();
    }
}
