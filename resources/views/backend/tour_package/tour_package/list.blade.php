@extends('backend.template.main')
@section('insert_caption','Insert New Tour Package')
@section('view_caption','View All Tour Package')
@section('insert_link','add-tour-package?page=1')
@section('view_link','tour-package')
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
                            <th>#</th>
                            <th>Tour Name</th>
                            <th>Category</th>
                            <th>Tipe</th>  
                            <th>Durations</th>
                            <th>Overview</th>
                            <th>Gallery</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        {{-- @foreach($tourpackage as $tp) --}}
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
