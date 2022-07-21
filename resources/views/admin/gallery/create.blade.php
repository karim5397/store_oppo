@extends('admin.admin_master')
@section('admin')
<div class="content">

    <div class="container-fluid">

        <h1>{{__('Add Image')}}</h1>

        <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Image')}}</label>
                    <input class="form-control" type="file" name="image[]" multiple accept="image/*">
                    @error('image')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <input type="submit" value="{{__('Create')}}" class="btn btn-primary">

        </form>

    </div>


</div>

@endsection

