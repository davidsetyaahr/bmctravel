@extends('backend.template.main')
@section('insert_caption','Insert New Categories Gallery')
@section('view_caption','View All Categories Gallery')
@section('insert_link','add-categories-gallery')
@section('view_link','categories')
@section('view_status','active')
@section('insert_status','')
@section('pagetitle','Galeri Kategori')

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
                                    <th>Category Name</th>
                                    <th>Option</th>
                            </thead>
                            <tbody>
                                @foreach ($id_category as $gc)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $gc->category_name}}</td>
                                        <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Options
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="edit-categories-gallery/{{ $gc->id_category }}">Edit</a>
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
