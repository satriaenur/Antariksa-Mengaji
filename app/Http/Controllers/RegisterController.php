<?php

namespace App\Http\Controllers;

use App\Pendaftar;
use App\User;
use Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class RegisterController extends Controller
{
    use AuthenticatesAndRegistersUsers;

    const MAX_IKHWAN = 150;
    const MAX_AKWAT = 300;

    protected $redirectTo = '/home';

    public function __construct(Pendaftar $pendaftar, User $user)
    {
        $this->pendaftar = $pendaftar;
        $this->user = $user;
    }

    public function index()
    {
        $sisaQuotaIkhwan = self::MAX_IKHWAN - $this->countPendaftar("L");
        $sisaQuotaAkhwat = self::MAX_AKWAT - $this->countPendaftar("P");

        $statusQuotaIkhwan = $sisaQuotaIkhwan <= 0 ? 0 : $sisaQuotaIkhwan;
        $statusQuotaAkhwat = $sisaQuotaAkhwat <= 0 ? 0 : $sisaQuotaAkhwat;
        return view('register.form_register', compact('statusQuotaIkhwan', 'statusQuotaAkhwat'));
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
        $statusWaitingList = $this->setWaitingListStatus($request->get('gender'));

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

        $this->pendaftar->create($dataPendaftar);
        $this->postRegister($request);


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
