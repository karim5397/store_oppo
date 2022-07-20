@extends('admin.admin_master')
@section('admin')

<div class="content">

    <div class="container-fluid">

        <h1>{{__('Update Pricing')}}</h1>

        <form action="{{route('prices.update' , $price->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Title English')}} </label>
                    <input type="text" class="form-control" placeholder="{{__('Write Title')}}" name="title_en" value="{{$price->title_en}}">
                </div>
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Title Arabic')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Write Title')}}" name="title_ar" value="{{$price->title_ar}}">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Description English')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="description_en" >{{$price->description_en}}</textarea>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Description Arabic')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="description_ar" >{{$price->description_ar}}</textarea>
                </div>
                <div class="mb-3  col-6">
                    <label  class="form-label">{{__('Price')}} </label>
                    <input type="text" class="form-control" placeholder="{{__('Write Price')}}" name="price" value="{{$price->price}}">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Pricing Image')}}</label>
                    <input class="form-control" type="file" name="image" value="{{$price->image}}">
                    <input type="hidden" name="old_image" value="{{$price->image}}">
                </div>
            </div>

            <input type="submit" value="Update" class="btn btn-primary">
        </form>

    </div>


</div>

   <!-- start page title -->

<!-- end page title -->
@endsection
