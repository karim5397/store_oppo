@extends('admin.admin_master')
@section('admin')

<div class="content">

    <div class="container-fluid">

        <h1>Update Product</h1>

        <form action="{{route('update.product' , $products->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 my-5">
                <label  class="form-label">Title</label>
                <input type="text" class="form-control" placeholder="Write Title" name="title" value="{{$products->title}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="3" name="description" >{{$products->description}}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Slider Image</label>
                <input class="form-control" type="file" name="image" value="{{$products->image}}">
                <input type="hidden" name="old_image" value="{{$products->image}}">
            </div>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>

    </div>


</div>

   <!-- start page title -->

<!-- end page title -->
@endsection
