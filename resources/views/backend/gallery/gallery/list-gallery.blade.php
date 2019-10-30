@extends('backend.template.main')
@section('insert_caption','Insert New Gallery')
@section('view_caption','View All Gallery')
@section('insert_link','add-gallery')
@section('view_link','gallery')
@section('view_status','active')
@section('insert_status','')
@section('pagetitle','Gallery')

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
                                    <th>Gallery</th>
                                    <th>Category</th>
                                    <th>Option</th>
                            </thead>
                            <tbody>
                                    @foreach ($gallery as $gc)
                                        <tr>
                                            <th>{{ $loop->iteration}}</th>
                                            <td><img src="{{ url('/images/gallery/'.$gc->img) }}" alt="" class="img-fluid transition"></td>
                                            <td>{{ $gc->category_name}}</td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Options
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="edit-gallery/{{ $gc->id_gallery }}">Edit</a>
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
