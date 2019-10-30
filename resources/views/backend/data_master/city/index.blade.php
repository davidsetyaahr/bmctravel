@extends('backend.template.main')
@section('insert_caption','Insert New city')
@section('view_caption','View All city')
@section('insert_link','add-city')
@section('view_link','city')
@section('view_status','active')
@section('insert_status','')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="zero_config" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Province</th>
                                <th>City</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $city as $city) 
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $city->province_id }}</td>
                                <td>{{ $city->city_name }}</td>
                                <td>
                                <a href="{{url('admin/data-master/edit-city')}}/{{ $city->id_city }}" class="badge badge-info">Edit</a>
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