@extends('admin.admin_master')
@section('admin')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="mt-3">
                    <a href="{{route('prices.create')}}" class="btn btn-primary">{{__('Add price')}}</a>
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

                        <div class="card-header" style="background-color: #2b3d51; color:#fff;">{{__('All price')}}</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('Title')}}</th>
                                <th scope="col">{{__('Description')}}</th>
                                <th scope="col">{{__('price')}}</th>
                                <th scope="col">{{__('Image')}}</th>
                                <th scope="col">{{__('Action')}}</th>

                            </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach ($prices as $price)

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
                                        <a href="{{route('prices.edit' ,$price->id)}}" class="btn btn-info">{{__('Edit')}}</a>
                                        <form action="{{route('prices.destroy',$price->id)}}" method="post" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="{{__('Delete')}}" class="btn btn-danger" onclick="return confirm('are you sure you want to delete it')">
                                        </form>
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
