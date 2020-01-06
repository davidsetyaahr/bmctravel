@extends('backend.template.main')
@section('insert_caption','Insert New Information')
@section('view_caption','View All Information')
@section('insert_link','add-information')
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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
