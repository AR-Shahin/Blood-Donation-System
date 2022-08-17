<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationRequest extends FormRequest
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
            "name" => ['required'],
            "email" => ['required','unique:users,email'],
            "phone" => ['required','unique:users,phone'],
            "blood_id" => ['required'],
            "age" => ['required',"numeric"],
            "date_of_birth" => ['required','before:' . Carbon::now()->subYears(18)->format('Y-m-d')],
            "password" => ['required'],
            "upazila_id" => ['required'],
        ];
    }
    public function messages()
    {
        return [
            "date_of_birth.before" =>  "You aren't able to register! Age should be greater than 18."
        ];
    }
}
