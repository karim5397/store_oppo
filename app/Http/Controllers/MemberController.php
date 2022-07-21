<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Requests\member\MemberRequest;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $members = Member::where(function ($q) use ($request) {
            return $q->when($request->search, function ($query)  use ($request) {
                return $query->where('name_en', 'like', '%' . $request->search . '%')
                    ->orWhere('name_ar', 'like', '%'  . $request->search . '%')
                    ->orWhere('description_en', 'like', '%'  . $request->search . '%')
                    ->orWhere('description_ar', 'like', '%'  . $request->search . '%');
            });
        })->whereNotNull('id')->Paginate(5);
        return view('admin.members.index' , compact('members'));
    }


    public function create()
    {
        return view('admin.members.create');
    }


    public function store(MemberRequest $request)
    {
        //upload hasFile image
        $member_img=$request->file('image');
        $img_ext=hexdec(uniqid()). '.' . $member_img->getClientOriginalExtension();
        $img_path="frontend/assets/images/members/";
        $last_img=$img_path . $img_ext;
        Image::make($member_img)->resize(300 , 300)->save($last_img);
        //upload hasFile image


        Member::create(array_merge($request->validated(), ['image'=>$last_img]));
        return redirect()->route('members.index')->with('message' , 'Member Created Successfully');
    }


    public function edit(Member $member)
    {
        $member=Member::find($member->id);
        return view('admin.members.edit' , compact('member'));
    }

    public function update(MemberRequest $request ,Member $member )
    {
        $old_image=$request->old_image;
        $member_img=$request->file('image');
        if($member_img){
            $img_ext=hexdec(uniqid()). '.' . $member_img->getClientOriginalExtension();
            $img_path='frontend/assets/images/members/';
            $last_img=$img_path . $img_ext;
            Image::make($member_img)->resize(300 , 300)->save($last_img);
            unlink($old_image);



            $member=Member::find($member->id)->update(array_merge($request->validated(), ['image'=>$last_img]));
            return redirect()->route('members.index')->with('message' , 'The Member Is Updated Successfully');
        }else{


            $member=Member::find($member->id)->update($request->safe()->except(['image']));
            return redirect()->route('members.index')->with('message' , 'The Member Is Updated Successfully');
        }
    }

    public function destroy($id)
    {
        $member=Member::findOrFail($id);
        if($member === null){
            $member=Member::findOrFail($id);
            $member->delete();
        }else{
            $member->delete();
            $old_image=$member->image;
            unlink($old_image);
        }

        return redirect()->route('members.index')->with('message' , 'The Member Is Deleted Successfully');
    }
}
