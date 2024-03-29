<?php

namespace App\Http\Requests\product;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            "description_en.required"=>"please input the description",
            "description_ar.required"=>"please input the description",
            "image.required"=>"please put the image",
        ];

    }
    public function rules()
    {
        return [
            "title_en"=>"required|max:255",
            "title_ar"=>"required|max:255",
            "description_en"=>"required",
            "description_ar"=>"required",
            "image"=>"required|mimes:png,jpg,jpeg,webp,gif,svg",
        ];
    }
}
