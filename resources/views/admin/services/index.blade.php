@extends('admin.admin_master')
@section('admin')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="mt-3">
                    <div class="row d-flex justify-content-between mx-1">
                        <a href="{{route('services.create')}}" class="btn btn-primary">{{__('Add Service')}}</a>

                        <form action="{{ route('services.index') }}" method="GET" class="d-flex">
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

                        <div class="card-header" style="background-color: #2b3d51; color:#fff;">{{__('All services')}}</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('Title')}}</th>
                                <th scope="col">{{__('Icon')}}</th>
                                <th scope="col">{{__('Action')}}</th>

                            </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach ($services as $service)

                                <tr>
                                   <th scope="row">{{$i++}} )</th>
                                   {{-- <th scope="row">{{$services->firstItem()+$loop->index}} )</th> <!-- for contuin count when go to next page  --> --}}
                                   @if (App::getLocale() =='en')
                                   <td>{{ $service->title_en}}</td>
                                   @else
                                   <td>{{ $service->title_ar}}</td>
                                   @endif
                                   <td>{{ $service->icon}}</td>
                                    <td>
                                        <a href="{{route('services.edit' ,$service->id)}}" class="btn btn-info">{{__('Edit')}}</a>
                                        <form action="{{route('services.destroy',$service->id)}}" method="post" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="{{__('Delete')}}" class="btn btn-danger" onclick="return confirm('are you sure you want to delete it')">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin: 15px">{{ $services->links('pagination::bootstrap-4') }}</div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
