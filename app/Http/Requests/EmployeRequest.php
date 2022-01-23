<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeRequest extends FormRequest
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
            "fullname"=>"required|unique:employes,fullname",
            "registration_number"=>'numeric|required|unique:employes,registration_number',
            "depart"=>"required",
            "Hire_date"=>"required",
            "phone"=>"required",
            "adress"=>"required",
            "city"=>"required"
        ];
    }
}
