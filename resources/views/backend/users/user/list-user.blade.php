@extends('backend.template.main')
{{-- @section('insert_caption','Insert User') --}}
@section('view_caption','View User')
@section('insert_link','add-user')
@section('view_link','user')
@section('view_status','active')
@section('insert_status','')
@section('pagetitle','User')
@section('admin')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                                    <th>#</th>
                                    <th>email</th>
                                    <th>passwword</th>
                                    <th>firstname</th>
                                    <th>lastname</th>
                                    <th>phone</th>
                            </thead>
                            <tbody>
                                    @foreach ($id_user as $usr)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $usr->email }}</td>
                                            <td>{{ $usr->password }}</td>
                                            <td>{{ $usr->firstname }}</td>
                                            <td>{{ $usr->lastname }}</td>
                                            <td>{{ $usr->phone }}</td>
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
