@extends('backend.template.main')
@section('insert_caption','Insert New Price')
@section('view_caption','View All Price')
@section('insert_link','add-price-categories')
@section('view_link','price-categories')
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
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Start Pax</th>
                                <th>End Pax</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $price_categories as $prc )
                            <tr>
                                <th>{{ $loop->iteration}}</th>
                                <td>{{$prc->start_pax}}</td>
                                <td>{{$prc->end_pax}}</td>
                                <td>Detail</td>
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
