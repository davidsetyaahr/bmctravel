@extends('backend.template.main')
@section('insert_caption','Insert New Travel Tips')
@section('view_caption','View All Travel Tips')
@section('insert_link','add-travel-tips')
@section('view_link','list')
@section('view_status','active')
@section('insert_status','')
@section('admin')
@section('pagetitle','List Travel Tips')

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
                            <th>Title</th>
                            <th>Admin</th>
                            <th>Content</th>
                            <th>Permalink</th>
                            <th>Insert Date</th>
                            <th>Update Date</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                        @foreach($travel_tips as $trvltips)
                            <tr>
                                <th>{{ $loop->iteration}}</th>
                                <td>{{$trvltips->title}}</td>
                                <td>{{$trvltips->id_admin}}</td>
                                <td>{{substr(strip_tags($trvltips->content),0,100). ' ...'}}</td>
                                <td>{{$trvltips->permalink}}</td>
                                <td>{{$trvltips->insert_date}}</td>
                                <td>{{$trvltips->update_date}}</td>
                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="edit-travel-tips/{{ $trvltips->id_travel_tips }}">Edit</a>
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
