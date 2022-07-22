@extends('admin.admin_master')
@section('admin')

<div class="content">

    <div class="container-fluid">

        <h1>{{__('Update Services')}}</h1>

        <form action="{{route('services.update' , $service->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Title English')}} </label>
                    <input type="text" class="form-control" placeholder="{{__('Write Title')}}" name="title_en" value="{{$service->title_en}}">
                </div>
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Title Arabic')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Write Title')}}" name="title_ar" value="{{$service->title_ar}}">
                </div>
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Icon')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Choose Icon')}}" name="icon" value="{{$service->icon}}" data-fa-browser>
                </div>
            </div>
            <input type="submit" value="{{__('Update')}}" class="btn btn-primary">
        </form>

    </div>


</div>

   <!-- start page title -->

<!-- end page title -->
@endsection
