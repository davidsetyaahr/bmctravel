@extends('backend.template.main')
{{-- @section('insert_caption','Insert User') --}}
@section('view_caption','View User')
@section('insert_link','add-user')
@section('view_link','user')
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
                                    <th>email</th>
                                    <th>passwword</th>
                                    <th>firstname</th>
                                    <th>lastname</th>
                                    <th>phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($id_user as $usr)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $usr->email }}</td>
                                            <td>{{ $usr->password }}</td>
                                            <td>{{ $usr->firstname }}</td>
                                            <td>{{ $usr->lastname }}</td>
                                            <td>{{ $usr->phone }}</td>
                                        </tr>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
