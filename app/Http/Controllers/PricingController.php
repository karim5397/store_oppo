<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Intervention\Image\Facades\Image;
use App\Http\Requests\pricing\StorePricingRequest;
use App\Http\Requests\pricing\UpdatePricingRequest;
use App\Http\Requests\pricing\StorePricingRequest as PricingStorePricingRequest;

class PricingController extends Controller
{
    public function index()
    {
        $pricings=Pricing::latest()->get();
        return view('admin.pricing.index' , compact('pricings'));
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
        return redirect()->route('all.pricing')->with('message' , 'Pricing Created Successfully');
    }


    public function edit($id)
    {
        $pricings=Pricing::find($id);
        return view('admin.pricing.edit' , compact('pricings'));
    }

    public function update(UpdatePricingRequest $request ,$id )
    {
        $old_image=$request->old_image;
        $pricing_img=$request->file('image');
        if($pricing_img){
            $img_ext=hexdec(uniqid()). '.' . $pricing_img->getClientOriginalExtension();
            $img_path='frontend/assets/images/';
            $last_img=$img_path . $img_ext;
            Image::make($pricing_img)->resize(100 , 100)->save($last_img);
            unlink($old_image);



            $pricings=Pricing::find($id);
            $pricings->update(array_merge($request->validated(), ['image'=>$last_img]));

            return redirect()->route('all.pricing')->with('message' , 'The Pricing Is Updated Successfully');
        }else{

            $pricings=Pricing::find($id);
            $pricings->update($request->safe()->except(['image']));
            return redirect()->route('all.pricing')->with('message' , 'The Pricing Is Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $pricing=Pricing::findOrFail($id);
        $old_image=$pricing->image;
        unlink($old_image);
        $pricing->delete();
        return redirect()->route('all.pricing')->with('message' , 'The Pricing Is Deleted Successfully');
    }
}
