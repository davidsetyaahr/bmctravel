@extends('backend.template.main')
@section('insert_caption','Insert New Tips Tag')
@section('view_caption','View All Tips Tag')
@section('insert_link','add-tags')
@section('show_link','edit-tags')
@section('view_link','tag')
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
                                    <th>Id Tips Tags</th>
                                    <th>Id Travel Tips</th>
                                    <th>Id Tag</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($id_tips_tags as $tt)
                                        <td> {{ $loop->iteration }} </td>
                                        <td>{{ $tt->id_tips_tag }}</td>
                                        <td>{{ $tt->id_travel_tips }}</td>
                                        <td>{{ $tt->id_tag }}</td>
                                        <td><a href="edit-tags" class="btn btn-warning">Edit</a></td>
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
