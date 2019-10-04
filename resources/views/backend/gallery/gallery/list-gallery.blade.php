@extends('backend.template.main')
@section('insert_caption','Insert New Gallery')
@section('view_caption','View All Gallery')
@section('insert_link','add-categories-gallery')
@section('view_link','gallery')
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
                                    <th>Gallery</th>
                                    <th>ID Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($id_gallery as $gc)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $gc->img}}</td>
                                            <td>{{ $gc->id_category}}</td>
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
