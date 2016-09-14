<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required',
            'call_name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'phone' => 'required|unique:pendaftars,phone,'.$this->get('id').'|numeric',
            'email' => 'required|unique:pendaftars,email,'.$this->get('id').'|email',
            'address' => 'required',
            'province_id' => 'required',
            'city_id' => 'required',
            'time_zone' => 'required',
            'platform' => 'required',
            'experience' => 'required',
            'expectation' => 'required',
            'password' => 'required|confirmed|min:6',
        ];
    }
}
