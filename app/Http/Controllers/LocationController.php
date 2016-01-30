<?php

namespace App\Http\Controllers;

use App\City;
use App\Province;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function __construct(Province $province, City $city)
    {
        $this->province = $province;
        $this->city = $city;
    }

    public function getAjaxCities(Request $request)
    {
        $province_id = $request->get('province_id');
        $cities = $this->city
            ->where('province_id', $province_id)
            ->get()
            ->toArray();
        return response()->json($cities);
    }



}
