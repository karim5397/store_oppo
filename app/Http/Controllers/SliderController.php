<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $prices=Pricing::latest()->get();
        return view('admin.pricing.index' , compact('prices'));
    }


    public function create()
    {
        return view('admin.pricing.create');
    }


    public function store(StorePricingRequest $request)
    {
        //upload hasFile image
        $pricing_img=$request->file('image');
        $img_ext=hexdec(uniqid()). '.' . $pricing_img->getClientOriginalExtension();
        $img_path="frontend/assets/images/";
        $last_img=$img_path . $img_ext;
        Image::make($pricing_img)->resize(100 , 100)->save($last_img);
        //upload hasFile image


        Pricing::create(array_merge($request->validated(), ['image'=>$last_img]));
        return redirect()->route('prices.index')->with('message' , 'Pricing Created Successfully');
    }


    public function edit(Pricing $price)
    {
        $price=Pricing::find($price->id);
        return view('admin.pricing.edit' , compact('price'));
    }

    public function update(UpdatePricingRequest $request ,Pricing $price )
    {
        $old_image=$request->old_image;
        $pricing_img=$request->file('image');
        if($pricing_img){
            $img_ext=hexdec(uniqid()). '.' . $pricing_img->getClientOriginalExtension();
            $img_path='frontend/assets/images/';
            $last_img=$img_path . $img_ext;
            Image::make($pricing_img)->resize(100 , 100)->save($last_img);
            unlink($old_image);



            $price=Pricing::find($price->id)->update(array_merge($request->validated(), ['image'=>$last_img]));
            return redirect()->route('prices.index')->with('message' , 'The Pricing Is Updated Successfully');
        }else{


            // $price=Pricing::find($price->id)->update($request->safe()->except(['image']));
            return redirect()->route('prices.index')->with('message' , 'The Pricing Is Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $price=Pricing::findOrFail($id);
        if($price === null){
            $price=Pricing::findOrFail($id);
            $price->delete();
        }else{
            $price->delete();
            $old_image=$price->image;
            unlink($old_image);
        }

        return redirect()->route('prices.index')->with('message' , 'The Pricing Is Deleted Successfully');
    }
}
