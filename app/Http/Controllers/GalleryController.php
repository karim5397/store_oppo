<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $images = Gallery::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query)  use ($request) {
                return $query->where('image', 'like', '%' . $request->search . '%');
            });
        })->whereNotNull('id')->Paginate(5);
        return view('admin.gallery.index' , compact('images'));
    }


    public function create()
    {
        return view('admin.gallery.create');
    }


    public function store(Request $request)

    {

        $validated = $request->validate([
            'image' => 'required',
        ],
        [
            'image.required'=>'Please Input image',

        ]);

        $image=$request->file('image');
        foreach($image as $mutli_pic){

            $img_uniqed=hexdec(uniqid()).'.'.$mutli_pic->getClientOriginalExtension();
            $last_image_name="frontend/assets/images/gallery/".$img_uniqed;
            Image::make($mutli_pic)->resize(325,375)->save($last_image_name);


            $images=new Gallery;
            $images->image=$last_image_name;
            $images->save();
        }
        return redirect()->route('gallery.index')->with('message' , 'The Image Is Created Successfully');
    }


    public function edit($id)
    {
        $image=Gallery::find($id);
        return view('admin.gallery.edit' , compact('image'));
    }

    public function update(Request $request ,$id)
    {
            $old_image=$request->old_image;
            $gallery_img=$request->file('image');
            $img_ext=hexdec(uniqid()). '.' . $gallery_img->getClientOriginalExtension();
            $img_path='frontend/assets/images/gallery/';
            $last_img=$img_path . $img_ext;
            Image::make($gallery_img)->resize(325 , 375)->save($last_img);
            unlink($old_image);
            Gallery::find($id)->update(['image'=>$last_img]);
            return redirect()->back()->with('message' , 'The Image Is Updated Successfully');

    }

    public function destroy($id)
    {
        $image=Gallery::findOrFail($id);
        if($image === null){
            $image=Gallery::findOrFail($id);
            $image->delete();
        }else{
            $image->delete();
            $old_image=$image->image;
            unlink($old_image);
        }

        return redirect()->route('gallery.index')->with('message' , 'The Image Is Deleted Successfully');
    }
}
