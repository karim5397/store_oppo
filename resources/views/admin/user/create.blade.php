@extends('admin.admin_master')
@section('admin')
<div class="content">

    <div class="container-fluid">

        <h1>{{__('Add User')}}</h1>

        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('First Name')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Write First Name')}}" name="f_name">
                    @error('f_name')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 my-5 col-6">
                    <label  class="form-label">{{__('Last Name')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Write Last Name')}}" name="l_name">
                    @error('l_name')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Email')}}</label>
                    <input type="email" class="form-control" placeholder="{{__('Write Your Email')}}" name="email">
                    @error('email')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Phone')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Write Your Phone')}}" name="phone">
                    @error('phone')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Password')}}</label>
                    <input type="password" class="form-control" placeholder="{{__('Write Your Password')}}" name="password">
                    @error('password')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('Confirm Password')}}</label>
                    <input type="password" class="form-control" placeholder="{{__('Write Your Password')}}" name="password_confirmation">
                    @error('password')
                     <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">{{__('User Image')}}</label>
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
