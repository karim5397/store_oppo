@extends('admin.admin_master')
@section('admin')
<div class="content">

    <div class="container-fluid">

        <h1>Add Product</h1>

        <form action="{{route('store.product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 my-5">
                    <label  class="form-label">Title</label>
                    <input type="text" class="form-control" placeholder="Write Title" name="title">
                    @error('title')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="description"></textarea>
                    @error('description')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Product Image</label>
                    <input class="form-control" type="file" name="image">
                    @error('image')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <input type="submit" value="Create" class="btn btn-primary">
        </form>

    </div>


</div>

@endsection
@section('script')

@endsection
