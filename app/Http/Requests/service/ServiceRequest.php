<?php

namespace App\Http\Requests\service;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            "title_en.required"=>"please input the title",
            "title_ar.required"=>"please input the title",
            "icon.required"=>"please put the icon",
        ];

    }
    public function rules()
    {
        $rules = [
            "title_en"=>"required|max:255",
            "title_ar"=>"required|max:255",
            "icon"=>"required",
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules = [
                'title_ar' => 'required',
                'title_en' => 'required',
                "icon"=>"required",
            ];
        }
        return $rules;
    }
}
