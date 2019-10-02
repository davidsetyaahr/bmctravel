@extends('backend.template.main')
@section('insert_caption','Insert New Destination')
@section('view_caption','View All Destination')
@section('insert_link','add-destination')
@section('view_link','list')
@section('view_status','active')
@section('insert_status','')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <th>Destination Name</th>
                            <th>Category</th>
                            <th>City</th>
                            <th>Overview</th>
                            <th>Map</th>
                            <th>Information</th>
                            <th>Gallery</th>
                        </thead>
                        <tbody>
                        @foreach($destinations as $d)
                            <tr>
                                <td>{{ $d->destination_name }}</td>
                                <td>{{ $d->category_name }}</td>
                                <td>{{ $d->city_name }}</td>
                                <td>{{ $d->overview }}</td>
                                <td>{{ $d->map }}</td>
                                <td>{{ $d->Information }}</td>
                                <td>{{ $d->img }}</td>
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
