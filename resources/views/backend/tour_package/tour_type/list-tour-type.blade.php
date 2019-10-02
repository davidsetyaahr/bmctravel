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
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type Name</th>
                                    <th>Gallery</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>A</td>
                                    <td>A</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
