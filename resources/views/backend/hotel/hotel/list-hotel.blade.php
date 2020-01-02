@extends('backend.template.main')
@section('insert_caption','Insert New Hotel')
@section('view_caption','View All Hotel')
@section('insert_link','add-hotel')
@section('view_link','hotel')
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
                                <th>Gallery</th>
                                <th>Map</th>
                                <th>Overview</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $hotels as $htl )
                            <tr>
                                <th>{{ $loop->iteration}}</th>
                                <td>{{$htl->hotel_name}}</td>
                                <td><img style="height: 200px; width: 200px;" src="{{ url('/public/images/gallery/'.$htl->img) }}" alt="" class="img-fluid transition"></td>
                                {{-- <td>{{$htl->id_gallery}}</td> --}}
                                <td>{{$htl->map}}</td>
                                <td>{{$htl->overview}}</td>
                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="edit-hotel/{{ $htl->id_hotel }}">Edit</a>
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
