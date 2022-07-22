<?php

namespace App\Http\Controllers;

use App\Models\Touch;
use App\Models\Member;
use App\Models\Slider;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Pricing;
use App\Models\Product;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Requests\touch\TouchRequest;

class HomeController extends Controller
{
    public function index(){
        if(App::getLocale()== 'en'){
            $contacts=Contact::latest()->get();
            $features=Feature::latest()->get();
            $images=Gallery::latest()->get();
            $members=Member::latest()->get();
            $prices=Pricing::latest()->get();
            $products=Product::latest()->get();
            $services=Service::latest()->get();
            $sliders=Slider::first();
            $testimonials=Testimonial::latest()->get();
            return view('website_en.home' , compact('contacts','features','images','members','prices','products','services','sliders','testimonials'));
        }else{
            $contacts=Contact::latest()->get();
            $features=Feature::latest()->get();
            $images=Gallery::latest()->get();
            $members=Member::latest()->get();
            $prices=Pricing::latest()->get();
            $products=Product::latest()->get();
            $services=Service::latest()->get();
            $sliders=Slider::latest()->get();
            $testimonials=Testimonial::latest()->get();
            return view('website_ar.home' ,compact('contacts','features','images','members','prices','products','services','sliders','testimonials'));
        }
    }
    public function storeTouch(TouchRequest $request)
    {
        Touch::create($request->validated());
        return response()->json(['success' => 'The Touch Send. Thank you.']);
    }

}
