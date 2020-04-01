@extends('backend.template.main')
@section('insert_caption','Insert New Category')
@section('view_caption','View All Category')
@section('insert_link','add-categories')
@section('view_link','categories')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @include('backend.gallery.gallery-template.select-gallery', ['type' => 'single', 'gallery' => $gallery, 'categories' => $categories])
            <form action="{{url("admin/tour-package/add-categories")}}" method="post">
                @csrf
                    <label for="">Nama Kategori</label>
                    <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name">
                    @error('category_name')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    <br>
                    <label for="">Galeri</label>
                    @include('backend.gallery.gallery-template.gallery-hidden')
                    <br>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('backend.gallery.gallery-template.modal-gallery')
@endsection
