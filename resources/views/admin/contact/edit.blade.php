@extends('admin.admin_master')
@section('admin')

<div class="content">

    <div class="container-fluid">

        <h1>{{__('Update Contact')}}</h1>

        <form action="{{route('contacts.update' , $contact->id)}}" method="POST" >
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Phone')}} </label>
                    <input type="text" class="form-control" placeholder="{{__('Write Phone')}}" name="phone" value="{{$contact->phone}}">
                </div>
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Email')}}</label>
                    <input type="email" class="form-control" placeholder="{{__('Write Email')}}" name="email" value="{{$contact->email}}">
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Address English')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="address_en" >{{$contact->address_en}}</textarea>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Address Arabic')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="address_ar" >{{$contact->address_ar}}</textarea>
                </div>
            </div>

            <input type="submit" value="{{__('Update')}}" class="btn btn-primary">
        </form>

    </div>


</div>

   <!-- start page title -->

<!-- end page title -->
@endsection
