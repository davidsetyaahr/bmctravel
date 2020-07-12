@extends('backend.template.main')
@section('insert_caption','Insert New Tour Type')
@section('view_caption','View All Tour Type')
@section('insert_link','add-tour-type')
@section('view_link','tour-type')
@section('view_status','active')
@section('insert_status','')

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
                                    <th>Nama Tipe</th>
                                    <th>Galeri</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tour_type as $item)
                                    <tr>
                                        <th>{{$loop->iteration}}</th>
                                        <td>{{$item->type_name}}</td>
                                        {{-- <td>{{$item->id_gallery}}</td> --}}
                                        <td><img style="height: 200px; width: 200px;" src="{{ url('images/gallery/'.$item->img) }}" alt="" class="img-fluid transition"></td>
                                        <td>
                                            <div class="dropdown show">
                                                <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Opsi
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="edit-tour-type/{{ $item->id_type }}">Edit</a>
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
