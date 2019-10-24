@extends('backend.template.main')
@section('insert_caption','Insert New Tour Package')
@section('view_caption','View All Tour Package')
@section('insert_link','add-tour-package')
@section('view_link','tour-package')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @if(empty($_GET['page']))
                @include('backend.tour_package.tour_package.add-package1')
            @else
                @if($_GET['page']==2)
                    @include('backend.tour_package.tour_package.add-package2')
                @endif
            @endif
            </div>
        </div>
    </div>
</div>
@endsection
