<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            'common' => 'required|min:4',
            'password' => 'required',
        ];
    }

    public function messages(){
        return [
            'common.required'=> "phone or email is required",
            'common.min'=> "phone or email can't be less than 4 characters",
        ];
    }
}