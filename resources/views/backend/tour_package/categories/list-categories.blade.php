@extends('backend.template.main')
@section('insert_caption','Insert New Category')
@section('view_caption','View All Category')
@section('insert_link','add-categories')
@section('view_link','categories')
@section('view_status','active')
@section('insert_status','')
@section('pagetitle','Categories')

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
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Id Gallery</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tour_categories as $item)
                                <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td>{{$item->category_name}}</td>
                                    {{-- <td>{{$item->id_gallery}}</td> --}}
                                    <td><img style="height: 200px; width: 200px;" src="{{ url('images/gallery/'.$item->img) }}" alt="" class="img-fluid transition"></td>
                                    <td>
                                        <div class="dropdown show">
                                            <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Option
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="edit-categories/{{ $item->id_category }}">Edit</a>
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
