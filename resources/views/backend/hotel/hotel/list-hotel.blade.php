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
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
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
                                <td>{{$htl->id_gallery}}</td>
                                <td>{{$htl->map}}</td>
                                <td>{{$htl->overview}}</td>
                                <td>Detail</td>
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
