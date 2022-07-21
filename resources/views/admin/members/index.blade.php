@extends('admin.admin_master')
@section('admin')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="mt-3">
                    <div class="row d-flex justify-content-between mx-1">
                        <a href="{{route('members.create')}}" class="btn btn-primary">{{__('Add Member')}}</a>

                        <form action="{{ route('members.index') }}" method="GET" class="d-flex">
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

                        <div class="card-header" style="background-color: #2b3d51; color:#fff;">{{__('All members')}}</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('Title')}}</th>
                                <th scope="col">{{__('Name')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('Action')}}</th>

                            </tr>
                            </thead>
                            <tbody>
                                {{-- @php($i = 1) --}}
                                @foreach ($members as $member)

                                <tr>
                                   {{-- <th scope="row">{{$i++}} )</th> --}}
                                   <th scope="row">{{$members->firstItem()+$loop->index}} )</th> <!-- for contuin count when go to next page  -->
                                   @if (App::getLocale() =='en')

                                   <td>{{ $member->name_en}}</td>
                                   <td>{!! $member->description_en !!}</td>
                                   @else
                                   <td>{{ $member->name_ar}}</td>
                                   <td>{!! $member->description_ar !!}</td>
                                   @endif
                                    <td><img src="{{asset($member->image)}}" style="height: 40px; width:70px;" alt=""></td>
                                    <td>
                                        <a href="{{route('members.edit' ,$member->id)}}" class="btn btn-info">{{__('Edit')}}</a>
                                        <form action="{{route('members.destroy',$member->id)}}" method="post" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="{{__('Delete')}}" class="btn btn-danger" onclick="return confirm('are you sure you want to delete it')">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin: 15px">{{ $members->links('pagination::bootstrap-4') }}</div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
