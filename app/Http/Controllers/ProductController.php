<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\product\ProductStoreRequest;
use App\Http\Requests\product\ProductUpdateRequest;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        //for search
        $products = Product::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query)  use ($request) {
                return $query->where('content_en', 'like', '%' . $request->search . '%')
                    ->orWhere('title_en', 'like', '%'  . $request->search . '%')
                    ->orWhere('title_ar', 'like', '%'  . $request->search . '%')
                    ->orWhere('description_en', 'like', '%'  . $request->search . '%')
                    ->orWhere('description_ar', 'like', '%'  . $request->search . '%');
            });
        })->whereNotNull('id')->Paginate(5);




        // $products=Product::latest()->Paginate(5);
        return view('admin.products.index' , compact('products'));
    }


    public function create()
    {
        return view('admin.products.create');
    }


    public function store(ProductStoreRequest $request)
    {
        //upload hasFile image
        $product_img=$request->file('image');
        $img_ext=hexdec(uniqid()). '.' . $product_img->getClientOriginalExtension();
        $img_path="frontend/assets/images/product_imgs/";
        $last_img=$img_path . $img_ext;
        Image::make($product_img)->resize(340 , 450)->save($last_img);
        //upload hasFile image


        Product::create(array_merge($request->validated(), ['image'=>$last_img]));
        return redirect()->route('all.products')->with('message' , 'Product Created Successfully');
    }


    public function edit($id)
    {
        $products=Product::find($id);
        return view('admin.products.edit' , compact('products'));
    }

    public function update(ProductUpdateRequest $request ,$id )
    {
        $old_image=$request->old_image;
        $product_img=$request->file('image');
        if($product_img){
            $img_ext=hexdec(uniqid()). '.' . $product_img->getClientOriginalExtension();
            $img_path='frontend/assets/images/product_imgs/';
            $last_img=$img_path . $img_ext;
            Image::make($product_img)->resize(340 , 450)->save($last_img);
            unlink($old_image);



            $products=Product::find($id);
            $products->update(array_merge($request->validated(), ['image'=>$last_img]));

            return redirect()->route('all.products')->with('message' , 'The Product Is Updated Successfully');
        }else{

            $products=Product::find($id);
            $products->update($request->safe()->except(['image']));
            return redirect()->route('all.products')->with('message' , 'The Product Is Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $old_image=$product->image;
        unlink($old_image);
        $product->delete();
        return redirect()->route('all.products')->with('message' , 'The Product Is Deleted Successfully');
    }
}
