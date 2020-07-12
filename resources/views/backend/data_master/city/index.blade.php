@extends('backend.template.main')
@section('insert_caption','Insert New city')
@section('view_caption','View All city')
@section('insert_link','add-city')
@section('view_link','city')
@section('view_status','active')
@section('insert_status','')
@section('pagetitle','City')
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
                    <table id="zero_config" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Provinsi</th>
                                <th>Kota</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $city as $city)
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $city->province_name }}</td>
                                <td>{{ $city->city_name }}</td>
                                <td>
                                <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opsi
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item"  href="edit-city/{{ $city->id_city }}">Edit</a>
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
