@extends('admin.admin_master')
@section('admin')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="mt-3">
                    <a href="{{route('create.pricing')}}" class="btn btn-primary">{{__('Add Pricing')}}</a>
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

                        <div class="card-header" style="background-color: #2b3d51; color:#fff;">{{__('All Pricing')}}</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('Title')}}</th>
                                <th scope="col">{{__('Description')}}</th>
                                <th scope="col">{{__('Price')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('Action')}}</th>

                            </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach ($pricings as $price)

                                <tr>
                                   <th scope="row">{{$i++}} )</th>
                                   {{-- <th scope="row">{{$prices->firstItem()+$loop->index}} )</th> <!-- for contuin count when go to next page  --> --}}
                                   @if (App::getLocale() =='en')

                                   <td>{{ $price->title_en}}</td>
                                   <td>{!! $price->description_en !!}</td>
                                   @else
                                   <td>{{ $price->title_ar}}</td>
                                   <td>{!! $price->description_ar !!}</td>
                                   @endif
                                   <td>{{ $price->price}}</td>
                                    <td><img src="{{asset($price->image)}}" style="height: 40px; width:70px;" alt=""></td>
                                    <td>
                                        <a href="{{route('edit.pricing' ,$price->id)}}" class="btn btn-info">{{__('Edit')}}</a>
                                        <a href="{{route('delete.pricing' ,$price->id)}}" onclick="return confirm('are you sure you want to delete it')" class="btn btn-danger">{{__('Delete')}}</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
