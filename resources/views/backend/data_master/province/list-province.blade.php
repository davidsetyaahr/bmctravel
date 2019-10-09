@extends('backend.template.main')
@section('insert_caption','Insert New Province')
@section('view_caption','View All Province')
@section('insert_link','add-province')
@section('view_link','province')
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
                                <th>Province</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $province as $province)
                            <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $province->province_name }}</td>
                                <td>
                                <a href="/province/1" class="badge badge-info">detail</a>
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