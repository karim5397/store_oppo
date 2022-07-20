<?php

namespace App\Http\Requests\contact;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
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
            "phone.required"=>"please input the phone",
            "email.required"=>"please input the email",
            "address_en.required"=>"please input the address",
            "address_ar.required"=>"please input the address",

        ];

    }
    public function rules()
    {
        return [
            "phone" => 'required|unique:contacts,phone,'. $this->contact->id .'',
            "email" => 'required|max:255|unique:contacts,email,'.$this->contact->id.'',
            "address_en" => "required",
            "address_ar" => "required",
        ];
    }
}
