<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\testimonial\TestimonialRequest;

class TestimomialController extends Controller
{
    public function index(Request $request)
    {
        $testimonials = Testimonial::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query)  use ($request) {
                return $query->where('title_en', 'like', '%' . $request->search . '%')
                    ->orWhere('title_ar', 'like', '%'  . $request->search . '%')
                    ->orWhere('content_en', 'like', '%'  . $request->search . '%')
                    ->orWhere('content_ar', 'like', '%'  . $request->search . '%')
                    ->orWhere('description_en', 'like', '%'  . $request->search . '%')
                    ->orWhere('description_ar', 'like', '%'  . $request->search . '%');
            });
        })->whereNotNull('id')->Paginate(5);
        return view('admin.testimonials.index' , compact('testimonials'));
    }


    public function create()
    {
        return view('admin.testimonials.create');
    }


    public function store(TestimonialRequest $request)
    {
        //upload hasFile image
        $testimonial_img=$request->file('image');
        $img_ext=hexdec(uniqid()). '.' . $testimonial_img->getClientOriginalExtension();
        $img_path="frontend/assets/images/";
        $last_img=$img_path . $img_ext;
        Image::make($testimonial_img)->resize(100 , 100)->save($last_img);
        //upload hasFile image


        Testimonial::create(array_merge($request->validated(), ['image'=>$last_img]));
        return redirect()->route('testimonials.index')->with('message' , 'Testimonial Created Successfully');
    }


    public function edit(Testimonial $testimonial)
    {
        $testimonial=Testimonial::find($testimonial->id);
        return view('admin.testimonials.edit' , compact('testimonial'));
    }

    public function update(TestimonialRequest $request ,Testimonial $testimonial )
    {
        $old_image=$request->old_image;
        $Testimonial_img=$request->file('image');
        if($Testimonial_img){
            $img_ext=hexdec(uniqid()). '.' . $Testimonial_img->getClientOriginalExtension();
            $img_path='frontend/assets/images/';
            $last_img=$img_path . $img_ext;
            Image::make($Testimonial_img)->resize(100 , 100)->save($last_img);
            unlink($old_image);



            $testimonial=Testimonial::find($testimonial->id)->update(array_merge($request->validated(), ['image'=>$last_img]));
            return redirect()->route('testimonials.index')->with('message' , 'The Testimonial Is Updated Successfully');
        }else{


            $testimonial=Testimonial::find($testimonial->id)->update($request->safe()->except(['image']));
            return redirect()->route('testimonials.index')->with('message' , 'The Testimonial Is Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $testimonial=Testimonial::findOrFail($id);
        if($testimonial === null){
            $testimonial=Testimonial::findOrFail($id);
            $testimonial->delete();
        }else{
            $testimonial->delete();
            $old_image=$testimonial->image;
            unlink($old_image);
        }

        return redirect()->route('testimonials.index')->with('message' , 'The Testimonial Is Deleted Successfully');
    }
}
