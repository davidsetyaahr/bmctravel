@extends('backend.template.main')
@section('insert_caption','Insert New Hotel')
@section('view_caption','View All Hotel')
@section('insert_link','add-hotel')
@section('view_link','hotel')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @include('backend.gallery.gallery-template.select-gallery', ['type' => 'single', 'gallery' => $gallery, 'categories' => $categories])
            <form action="{{url("admin/hotel/add-hotel")}}" method="post">
                @csrf
                <label for="">Hotel Name</label>
                <input type="text" class="form-control @error('hotel_name') is-invalid @enderror" name="hotel_name"
                value="{{ old('hotel_name')}}">
                @error('hotel_name')
                <div class="invalid-feedback"> {{ $message}} </div>
                @enderror
                <br>
                <label for="">Gallery</label>
                @include('backend.gallery.gallery-template.gallery-hidden')
                <br>
                <label for="">Map</label>
                <input type="text" class="form-control @error('map') is-invalid @enderror" name="map"
                value="{{ old('map')}}">
                @error('map')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <label for="">Overview</label>
                <input type="text" class="form-control @error('overview') is-invalid @enderror" name="overview"
                value="{{ old('overview')}}">
                @error('overview')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </form>
            </div>
        </div>
    </div>
</div>
@include('backend.gallery.gallery-template.modal-gallery')
@endsection
