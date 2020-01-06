@extends('backend.template.main')
@section('insert_caption','Insert New Hotel')
@section('view_caption','View All Room Hotel')
@section('insert_link',url("admin/room-hotel/add-room-hotel"))
@section('view_link','room-hotel')
@section('view_status','active')
@section('insert_status','')

@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif
                <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Hotel Name</th>
                                <th>Room name</th>
                                <th>Gallery</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $room_hotels as $r )
                            <tr>
                                <th>{{ $loop->iteration}}</th>
                                <td>{{$r->hotel_name}}</td>
                                <td>{{$r->room_name}}</td>
                                {{-- <td>{{$r->gallery}}</td> --}}
                                <td><img style="height: 200px; width: 200px;" src="{{ url('/images/gallery/'.$r->img) }}" alt="" class="img-fluid transition"></td>
                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="{{url('/admin/room-hotel/edit-room-hotel/'.$r->id_room_hotel)}}">Edit</a>
                                        </div>
                                    </div>
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
