<?php

namespace App\Http\Requests\member;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            "name_en.required"=>"please input the name",
            "name_ar.required"=>"please input the name",
            "description_en.required"=>"please input the description",
            "description_ar.required"=>"please input the description",
            "image.required"=>"please put the image",
        ];

    }
    public function rules()
    {
        $rules = [
            "name_en"=>"required|max:255",
            "name_ar"=>"required|max:255",
            "description_en"=>"required",
            "description_ar"=>"required",
            "image"=>"required|mimes:png,jpg,jpeg,webp,gif,svg",
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules = [
                'name_ar' => 'required',
                'name_en' => 'required',
                'description_en'=>'required',
                'description_ar'=>'required',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:3000',

            ];
        }
        return $rules;
    }

}
