@extends('backend.template.main')
@section('insert_caption','Insert New Categories')
@section('view_caption','View All Categories')
@section('insert_link','add-categories')
@section('view_link','categories')
@section('view_status','')
@section('insert_status','active')
@section('admin')
@section('pagetitle','Add New Category')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @include('backend.gallery.gallery-template.select-gallery', ['type' => 'single', 'gallery' => $gallery, 'categories' => $categories])
            <form action="{{url("admin/destinations/add-categories")}}" method="post">
            @csrf
                <label for="">Categories Name</label>
                <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name"
                value="{{ old('category_name')}}">
                @error('category_name')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <div class="col-md-12 m-t-15">
                    <label for="">Gallery</label>
                        @include('backend.gallery.gallery-template.gallery-hidden')
                </div>
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </div>
        </div>
    </div>
</div>

@endsection
