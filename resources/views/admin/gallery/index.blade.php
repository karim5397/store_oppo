@extends('admin.admin_master')
@section('admin')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="mt-3">
                    <div class="row d-flex justify-content-between mx-1">
                        <a href="{{route('gallery.create')}}" class="btn btn-primary">{{__('Add Image')}}</a>

                        <form action="{{ route('gallery.index') }}" method="GET" class="d-flex">
                            @csrf
                        <input type="search" name="search" data-kt-user-table-filter="search" value="{{request()->search}}" placeholder="{{__('Search')}}" class="form-control form-control-solid w-250px ps-14">
                        <button type="submit" class="btn btn-info ">
                            {{__('Search')}}
                        </button>
                    </form>
                </div>
                </div>
                <br>
                <div class="card">

                    @if (session('message'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-bottom: 0;">
                                <strong>{{session('message')}}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                      @endif

                        <div class="card-header" style="background-color: #2b3d51; color:#fff;">{{__('All Images')}}</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('Image Name')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('Action')}}</th>

                            </tr>
                            </thead>
                            <tbody>
                                {{-- @php($i = 1) --}}
                                @foreach ($images as $image)

                                <tr>
                                   {{-- <th scope="row">{{$i++}} )</th> --}}
                                   <th scope="row">{{$images->firstItem()+$loop->index}} )</th> <!-- for contuin count when go to next page  -->
                                   <td>{{ $image->image}}</td>
                                   <td><img src="{{asset($image->image)}}" style="height: 40px; width:70px;" alt=""></td>

                                    <td>
                                        <a href="{{route('gallery.edit' ,$image->id)}}" class="btn btn-info">{{__('Edit')}}</a>
                                        <form action="{{route('gallery.destroy',$image->id)}}" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="{{__('Delete')}}" class="btn btn-danger" onclick="return confirm('are you sure you want to delete it')">
                                    </form>
                                     </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin: 15px">{{ $images->links('pagination::bootstrap-4') }}</div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
