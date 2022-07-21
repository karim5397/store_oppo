<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\slider\SliderRequest;

class SliderController extends Controller
{
  public function index(Request $request)
    {
        $sliders = Slider::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query)  use ($request) {
                return $query->where('title_en', 'like', '%' . $request->search . '%')
                    ->orWhere('title_ar', 'like', '%'  . $request->search . '%')
                    ->orWhere('description_en', 'like', '%'  . $request->search . '%')
                    ->orWhere('description_ar', 'like', '%'  . $request->search . '%');
            });
        })->whereNotNull('id')->Paginate(5);
        return view('admin.sliders.index' , compact('sliders'));
    }


    public function create()
    {
        return view('admin.sliders.create');
    }


    public function store(SliderRequest $request)
    {
        //upload hasFile image
        $slider_img=$request->file('image');
        $img_ext=hexdec(uniqid()). '.' . $slider_img->getClientOriginalExtension();
        $img_path="frontend/assets/images/";
        $last_img=$img_path . $img_ext;
        Image::make($slider_img)->resize(600 , 400)->save($last_img);
        //upload hasFile image


        Slider::create(array_merge($request->validated(), ['image'=>$last_img]));
        return redirect()->route('sliders.index')->with('message' , 'Slider Created Successfully');
    }


    public function edit(Slider $slider)
    {
        $slider=Slider::find($slider->id);
        return view('admin.sliders.edit' , compact('slider'));
    }

    public function update(SliderRequest $request ,Slider $slider )
    {
        $old_image=$request->old_image;
        $slider_img=$request->file('image');
        if($slider_img){
            $img_ext=hexdec(uniqid()). '.' . $slider_img->getClientOriginalExtension();
            $img_path='frontend/assets/images/';
            $last_img=$img_path . $img_ext;
            Image::make($slider_img)->resize(600 , 400)->save($last_img);
            unlink($old_image);



            $slider=Slider::find($slider->id)->update(array_merge($request->validated(), ['image'=>$last_img]));
            return redirect()->route('sliders.index')->with('message' , 'The Slider Is Updated Successfully');
        }else{


            $slider=Slider::find($slider->id)->update($request->safe()->except(['image']));
            return redirect()->route('sliders.index')->with('message' , 'The Slider Is Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $slider=Slider::findOrFail($id);
        if($slider === null){
            $slider=Slider::findOrFail($id);
            $slider->delete();
        }else{
            $slider->delete();
            $old_image=$slider->image;
            unlink($old_image);
        }

        return redirect()->route('sliders.index')->with('message' , 'The Slider Is Deleted Successfully');
    }
}
