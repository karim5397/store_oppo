@extends('admin.admin_master')
@section('admin')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="mt-3">
                    <a href="{{route('create.product')}}" class="btn btn-primary">{{__('Add Product')}}</a>
                    <div class="row">
                        <form action="{{ route('users.index') }}" method="GET" class="searchformstyle">
                            @csrf
                        <input type="search" name="search" data-kt-user-table-filter="search" value="{{request()->search}}" placeholder="{{__('Search')}}" class="form-control form-control-solid w-250px ps-14">
                        <button type="submit" class="btn btn-bg-info searchindex">
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

                        <div class="card-header" style="background-color: #2b3d51; color:#fff;">{{__('All Products')}}</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('Title')}}</th>
                                <th scope="col">{{__('Description')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('Action')}}</th>

                            </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach ($products as $product)

                                <tr>
                                   <th scope="row">{{$i++}} )</th>
                                   {{-- <th scope="row">{{$products->firstItem()+$loop->index}} )</th> <!-- for contuin count when go to next page  --> --}}
                                   @if (App::getLocale() =='en')

                                   <td>{{ $product->title_en}}</td>
                                   <td>{!! $product->description_en !!}</td>
                                   @else
                                   <td>{{ $product->title_ar}}</td>
                                   <td>{!! $product->description_ar !!}</td>
                                   @endif
                                    <td><img src="{{asset($product->image)}}" style="height: 40px; width:70px;" alt=""></td>
                                    <td>
                                        <a href="{{route('edit.product' ,$product->id)}}" class="btn btn-info">{{__('Edit')}}</a>
                                        <a href="{{route('delete.product' ,$product->id)}}" onclick="return confirm('are you sure you want to delete it')" class="btn btn-danger">{{__('Delete')}}</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin: 15px">{{ $products->links('pagination::bootstrap-4') }}</div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
