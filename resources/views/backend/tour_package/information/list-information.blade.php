@extends('backend.template.main')
@section('insert_caption','Insert New Information')
@section('view_caption','View All Information')
@section('insert_link','information/add-information')
@section('view_link','information')
@section('view_status','active')
@section('insert_status','')
@section('pagetitle','Information')

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
                    <table id="zero_config" class="table table-bordered table-hover dataTable table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Text</th>
                                <th>type</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($id_informations as $inf)
                        <tr>
                                    <th>{{$loop->iteration}}</th>
                                    <td>{{$inf->text}}</td>
                                    <td><?php
                                    if ($inf->type == 0){
                                        echo 'Include';
                                    }
                                    elseif ($inf->type ==1) {
                                        echo 'Exclude';
                                    }
                                    elseif ($inf->type ==2) {
                                        echo 'What should i pack';
                                    }
                                    ?>
                                    </td>
                                    <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="informations/edit-information/{{ $inf->id_informations }}">Edit</a>
                                        </div>
                                    </div>
                                </td>
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
