@extends('admin.admin_master')
@section('admin')

<div class="content">

    <div class="container-fluid">

        <h1>{{__('Update Image')}}</h1>

        <form action="{{route('gallery.update' , $image->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Image')}}</label>
                    <input class="form-control" type="file" name="image" value="{{$image->image}}">
                    <img class="rounded mt-3" src="{{asset($image->image)}}" width="400px" height="500px">
                    <input type="hidden" name="old_image" value="{{$image->image}}">
                </div>
            </div>

            <input type="submit" value="Update" class="btn btn-primary">
        </form>

    </div>


</div>

   <!-- start page title -->

<!-- end page title -->
@endsection
