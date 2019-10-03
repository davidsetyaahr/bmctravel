@extends('backend.template.main')
@section('insert_caption','Insert New Categories Gallery')
@section('view_caption','View All Categories Gallery')
@section('insert_link','add-categories-gallery')
@section('view_link','categories')
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
                                    <th>Category Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($id_category as $gc)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $gc->category_name}}</td>
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
