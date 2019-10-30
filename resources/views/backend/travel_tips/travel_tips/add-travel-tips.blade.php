@extends('backend.template.main')
@section('insert_caption','Insert New Travel Tips')
@section('view_caption','View All Travel Tips')
@section('insert_link','add-travel-tips')
@section('view_link','list')
@section('view_status','')
@section('insert_status','active')
@section('admin')
@section('pagetitle','Add Travel Tips')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @include('backend.gallery.gallery-template.select-gallery', ['type' => 'single', 'gallery' => $gallery, 'categories' => $categories])
            <form action="{{ url('admin/travel-tips/travel-tips/add-travel-tips') }}" method="post">
                {{ csrf_field()}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 m-t-15">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title"
                                value="{{ old('title')}}">
                                @error('title')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Gallery</label>
                                @include('backend.gallery.gallery-template.gallery-hidden')     
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Content</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="konten" cols="30" rows="10">
                                {{ old('content')}}</textarea>
                                @error('content')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                            <div class="col-12 m-t-15">
                                <label for="">Permalink</label>
                                <input type="text" name="permalink" class="form-control @error('permalink') is-invalid @enderror"
                                value="{{ old('permalink')}}">
                                @error('permalink')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
