@extends('admin.admin_master')
@section('admin')

<div class="content">

    <div class="container-fluid">

        <h1>{{__('Update Member')}}</h1>

        <form action="{{route('members.update' , $member->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Name English')}} </label>
                    <input type="text" class="form-control" placeholder="{{__('Write Name')}}" name="name_en" value="{{$member->name_en}}">
                </div>
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Name Arabic')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Write Name')}}" name="name_ar" value="{{$member->name_ar}}">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Description English')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="description_en" >{{$member->description_en}}</textarea>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Description Arabic')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="description_ar" >{{$member->description_ar}}</textarea>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Member Image')}}</label>
                    <input class="form-control" type="file" name="image" value="{{$member->image}}">
                    <input type="hidden" name="old_image" value="{{$member->image}}">
                </div>
            </div>

            <input type="submit" value="{{__('Update')}}" class="btn btn-primary">
        </form>

    </div>


</div>

   <!-- start page title -->

<!-- end page title -->
@endsection
