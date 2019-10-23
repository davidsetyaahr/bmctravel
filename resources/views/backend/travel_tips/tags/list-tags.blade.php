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
                                    <th>Tag Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($id_tag as $tt)
                                        <td> {{ $loop->iteration }} </td>
                                        <td>{{ $tt->tag_name }}</td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Options
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="edit-tags/{{ $tt->id_tag }}">Edit</a>
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
