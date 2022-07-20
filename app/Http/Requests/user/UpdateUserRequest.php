<?php

namespace App\Http\Requests\user;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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


    public function messages(){
        return[
            "f_name.required"=>"please input the first name",
            "l_name.required"=>"please input the last name",
            "phone.required"=>"please input the phone",
            "email.required"=>"please input the email",
            "password.required"=>"please input the password",
        ];

    }
    public function rules()
    {
        return [
            "f_name" => "required|max:255",
            "l_name" => "required|max:255",
            'phone' => 'sometimes|unique:users,phone,'.$this->user->id.'',
            'email' => 'sometimes|unique:users,email,'.$this->user->id.'',
            'password' => 'sometimes|confirmed',
            "image" => "sometimes|mimes:png,jpg,jpeg,webp,gif,svg",

        ];
    }
}
