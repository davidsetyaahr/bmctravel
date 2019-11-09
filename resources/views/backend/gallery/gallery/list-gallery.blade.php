@extends('backend.template.main')
@section('insert_caption','Insert New Gallery')
@section('view_caption','View All Gallery')
@section('insert_link','add-gallery')
@section('view_link','gallery')
@section('view_status','active')
@section('insert_status','')
@section('admin')
@section('pagetitle', 'List Gallery')

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
<<<<<<< HEAD
                                            <td>{{ $loop->iteration}}</td>
                                            <td><img style="height: 200px; width: 200px;" src="{{ url('/images/gallery/'.$gc->img) }}" alt="" class="img-fluid transition"></td>
                                            <td>{{ $gc->id_category}}</td>
=======
                                            <th>{{ $loop->iteration}}</th>
                                            <td><img src="{{ url('/images/gallery/'.$gc->img) }}" alt="" class="img-fluid transition"></td>
                                            <td>{{ $gc->category_name}}</td>
>>>>>>> a7088474591bd62a1264341ca02c0d61fd8f6e43
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
