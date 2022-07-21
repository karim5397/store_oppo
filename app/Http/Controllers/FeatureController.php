<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\feature\FeatureRequest;

class FeatureController extends Controller
{
    public function index(Request $request)
    {
        $features = Feature::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query)  use ($request) {
                return $query->where('title_en', 'like', '%' . $request->search . '%')
                    ->orWhere('title_ar', 'like', '%'  . $request->search . '%')
                    ->orWhere('description_en', 'like', '%'  . $request->search . '%')
                    ->orWhere('description_ar', 'like', '%'  . $request->search . '%');
            });
        })->whereNotNull('id')->Paginate(5);
        return view('admin.features.index' , compact('features'));
    }


    public function create()
    {
        return view('admin.features.create');
    }


    public function store(FeatureRequest $request)
    {
        //upload hasFile image
        $feature_img=$request->file('image');
        $img_ext=hexdec(uniqid()). '.' . $feature_img->getClientOriginalExtension();
        $img_path="frontend/assets/images/";
        $last_img=$img_path . $img_ext;
        Image::make($feature_img)->resize(350 , 350)->save($last_img);
        //upload hasFile image


        Feature::create(array_merge($request->validated(), ['image'=>$last_img]));
        return redirect()->route('features.index')->with('message' , 'Feature Created Successfully');
    }


    public function edit(Feature $feature)
    {
        $feature=Feature::find($feature->id);
        return view('admin.features.edit' , compact('feature'));
    }

    public function update(FeatureRequest $request ,Feature $feature )
    {
        $old_image=$request->old_image;
        $feature_img=$request->file('image');
        if($feature_img){
            $img_ext=hexdec(uniqid()). '.' . $feature_img->getClientOriginalExtension();
            $img_path='frontend/assets/images/';
            $last_img=$img_path . $img_ext;
            Image::make($feature_img)->resize(350 , 350)->save($last_img);
            unlink($old_image);



            $feature=Feature::find($feature->id)->update(array_merge($request->validated(), ['image'=>$last_img]));
            return redirect()->route('features.index')->with('message' , 'The Feature Is Updated Successfully');
        }else{


            $feature=feature::find($feature->id)->update($request->safe()->except(['image']));
            return redirect()->route('features.index')->with('message' , 'The Feature Is Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $feature=Feature::findOrFail($id);
        if($feature === null){
            $feature=Feature::findOrFail($id);
            $feature->delete();
        }else{
            $feature->delete();
            $old_image=$feature->image;
            unlink($old_image);
        }

        return redirect()->route('features.index')->with('message' , 'The Feature Is Deleted Successfully');
    }
}
