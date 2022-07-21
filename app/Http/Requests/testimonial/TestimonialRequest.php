<?php

namespace App\Http\Requests\testimonial;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
        $rules = [
            "title_en"=>"required|max:255",
            "title_ar"=>"required|max:255",
            "content_en"=>"required",
            "content_ar"=>"required",
            "description_en"=>"required",
            "description_ar"=>"required",
            "image"=>"required|mimes:png,jpg,jpeg,webp,gif,svg",
        ];

        if (in_array($this->method(), ['PUT', 'PATCH'])) {
            $rules = [
                'title_ar' => 'required',
                'title_en' => 'required',
                "content_en"=>"required",
                "content_ar"=>"required",
                'description_en'=>'required',
                'description_ar'=>'required',
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:3000',

            ];
        }
        return $rules;
    }
}
