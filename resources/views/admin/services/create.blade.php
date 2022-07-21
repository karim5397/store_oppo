@extends('admin.admin_master')
@section('admin')
<div class="content">

    <div class="container-fluid">

        <h1>{{__('Add Services')}}</h1>

        <form action="{{route('services.store')}}" method="POST">
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
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Icon')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Choose Icon')}}" name="icon" data-fa-browser>
                    @error('icon')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <input type="submit" value="{{__('Create')}}" class="btn btn-primary">

        </form>

    </div>


</div>

@endsection

