@extends('backend.template.main')
@section('insert_caption','Insert New Destination')
@section('view_caption','View All Destination')
@section('insert_link','add-destination')
@section('view_link','list')
@section('view_status','active')
@section('insert_status','')
@section('admin')
@section('pagetitle','list Destination')

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
                            <th>#</th>
                            <th>Destination Name</th>
                            <th>Category</th>
                            <th>city</th>
                            <th>Gallery</th>
                            <th>Overview</th>
                            <th>Map</th>
                            <th>Information</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($destinations as $d)
                            <tr>
                                <th>{{ $loop->iteration}}</th>
                                <td>{{ $d->destination_name }}</td>
                                <td>{{ $d->category_name }}</td>
                                <td>{{ $d->city_name }}</td>
                                {{-- <td>{{ $d->gallery }}</td> --}}
                                <td><img style="height: 200px; width: 200px;" src="{{ url('/public/images/gallery/'.$d->gallery) }}" alt="" class="img-fluid transition"></td>
                                <td>{{ $d->overview }}</td>
                                <td>{{ $d->map }}</td>
                                <td>{{ $d->information }}</td>

                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="edit-categories/{{ $d->id_destination }}">Edit</a>
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
