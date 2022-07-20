@extends('admin.admin_master')
@section('admin')
<div class="content">

    <div class="container-fluid">

        <h1>{{__('Add Contact')}}</h1>

        <form action="{{route('contacts.store')}}" method="POST" >
                @csrf
            <div class="row">
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Phone')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Write Phone')}}" name="phone">
                    @error('phone')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Email')}}</label>
                    <input type="email" class="form-control" placeholder="{{__('Write Email')}}" name="email">
                    @error('email')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Address English')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="address_en" ></textarea>
                    @error('address_en')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Address Arabic')}}</label>
                    <textarea class="form-control tinymce-editor" rows="3" name="address_ar" ></textarea>
                    @error('address_ar')
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
