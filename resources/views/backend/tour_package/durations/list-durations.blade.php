@extends('backend.template.main')
@section('insert_caption','Insert New Durations')
@section('view_caption','View All Durations')
@section('insert_link','add-durations')
@section('view_link','durations')
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
                                <th>Hari</th>
                                <th>Malam</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $tour_durations as $dura )    
                            <tr>
                            <th>{{ $loop->iteration}}</th>
                            <td>{{ $dura->day}}</td>
                            <td>{{ $dura->night}}</td>
                                <td>
                                        <div class="dropdown show">
                                                <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Opsi
                                                </a>
        
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="edit-durations/{{ $dura->id_duration }}">Edit</a>
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
