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
                @include('backend.gallery.gallery-template.select-gallery', ['type' => 'single'])
                <label for="">Hotel Name</label>
                <input type="text" class="form-control"><br>
                <label for="">Image</label>
                @include('backend.gallery.gallery-template.gallery-hidden')
                <br>
                <label for="">Map</label>
                <input type="text" class="form-control"><br>
                <label for="">Overview</label>
                <input type="text" class="form-control"><br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </div>
        </div>
    </div>
</div>
@include('backend.gallery.gallery-template.modal-gallery')
@endsection
