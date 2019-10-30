@extends('backend.template.main')
@section('insert_caption','Insert New Tips Tag')
@section('view_caption','View All Tips Tag')
@section('insert_link','add-tags')
@section('show_link','edit-tags')
@section('view_link','tag')
@section('view_status','active')
@section('insert_status','')
@section('pagetitle','Tags')

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

                                    <th>#</th>
                                    <th>Tag Name</th>
                                    <th>Action</th>

                            </thead>
                            <tbody>
                                @foreach ($id_tag as $tt)
                                <tr>
                                        <th> {{ $loop->iteration }} </th>
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
