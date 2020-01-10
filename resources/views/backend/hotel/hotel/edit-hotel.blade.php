@extends('backend.template.main')
@section('insert_caption','Insert New Hotel')
@section('view_caption','View All Hotel')
@section('insert_link',url("admin/hotel/add-hotel"))
@section('view_link',url("admin/hotel/hotel"))
@section('view_status','')
@section('insert_status','')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @foreach($hotels as $htl)
                @include('backend.gallery.gallery-template.select-gallery', ['type' => 'single', 'gallery' => $gallery, 'categories' => $categories,'id_gallery' => $htl->id_gallery])
                <form action="{{url("admin/hotel/update")}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $htl->id_hotel }}">
                <label for="">Hotel Name</label>
                <input type="text" class="form-control @error('hotel_name') is-invalid @enderror" name="hotel_name" value="{{ $htl->hotel_name}}" disabled>
                @error('hotel_name')
                <div class="invalid-feedback"> {{ $message}} </div>
                @enderror
                <br>
                <label for="">Gallery</label>
                @include('backend.gallery.gallery-template.gallery-hidden', ['id_gallery' => $htl->id_gallery])
                <br>
                <label for="">Map</label>
                <input type="text" class="form-control @error('map') is-invalid @enderror" name="map" value="{{ $htl->map}}">
                @error('map')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <label for="">Overview</label>
                <input type="text" class="form-control @error('overview') is-invalid @enderror" name="overview" value="{{ $htl->overview}}">
                @error('overview')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@include('backend.gallery.gallery-template.modal-gallery')
@endsection
