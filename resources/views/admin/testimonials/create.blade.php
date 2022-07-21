@extends('admin.admin_master')
@section('admin')
<div class="content">

    <div class="container-fluid">

        <h1>{{__('Add Testimonial')}}</h1>

        <form action="{{route('testimonials.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Title English')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Write Title')}}" name="title_en">
                    @error('title_en')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Title Arabic')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Write Title')}}" name="title_ar">
                    @error('title_ar')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Content English')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="content_en" ></textarea>
                    @error('content_en')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Content Arabic')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="content_ar" ></textarea>
                    @error('content_ar')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Description English')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="description_en" ></textarea>
                    @error('description_en')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Description Arabic')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="description_ar" ></textarea>
                    @error('description_ar')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Product Image')}}</label>
                    <input class="form-control" type="file" name="image">
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
@section('script')

@endsection
