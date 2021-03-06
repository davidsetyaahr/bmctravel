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
                                <th>Mulai Pax</th>
                                <th>Batas Pax</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $price_categories as $prc )
                            <tr>
                                <th>{{ $loop->iteration}}</th>
                                <td>{{ $prc->start_pax}}</td>
                                <td>{{ $prc->end_pax}}</td>
                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Opsi
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="edit-price-categories/{{ $prc->id_price_category }}">Edit</a>
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
