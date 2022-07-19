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
            "title.required"=>"please input the title",
            "description.required"=>"please input the description",
            "image.required"=>"please put the image",
        ];

    }
    public function rules()
    {
        return [
            "title"=>"required|max:255",
            "description"=>"required",
            "image"=>"required|mimes:png,jpg,jpeg,webp",
        ];
    }
}
