@extends('admin.admin_master')
@section('admin')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="mt-3">
                    <a href="{{route('contacts.create')}}" class="btn btn-primary">{{__('Add Contact')}}</a>
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

                        <div class="card-header" style="background-color: #2b3d51; color:#fff;">{{__('All Contacts')}}</div>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">{{__('Phone')}}</th>
                                <th scope="col">{{__('Email')}}</th>
                                <th scope="col">{{__('Address')}}</th>
                                <th scope="col">{{__('Action')}}</th>

                            </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach ($contacts as $contact)

                                <tr>
                                   <th scope="row">{{$i++}} )</th>
                                   {{-- <th scope="row">{{$contacts->firstItem()+$loop->index}} )</th> <!-- for contuin count when go to next page  --> --}}
                                   <td>{{ $contact->phone}}</td>
                                   <td>{{ $contact->email}}</td>

                                   @if (App::getLocale() =='en')
                                   <td>{!! $contact->address_en !!}</td>
                                   @else
                                   <td>{!! $contact->address_ar !!}</td>
                                   @endif

                                    <td>
                                        <a href="{{route('contacts.edit' ,$contact->id)}}" class="btn btn-info">{{__('Edit')}}</a>
                                        <form action="{{route('contacts.destroy' ,$contact->id)}}" method="post" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="{{__('Delete')}}" class="btn btn-danger" onclick="return confirm('are you sure you want to delete it')">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div style="margin: 15px">{{ $contacts->links('pagination::bootstrap-4') }}</div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
