@extends('backend.template.main')
@section('insert_caption','Insert New Categories Gallery')
@section('view_caption','View All Categories Gallery')
@section('insert_link','add-categories-gallery')
@section('view_link','categories')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Galeri Kategori')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @foreach ($id_category as $gc)
                <form action="/admin/gallery/categories/update" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $gc->id_category }}">
                    <label for="">Category Name</label>
                <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{ $gc->category_name }}">
                    @error('category_name')
                        <div class="invalid-feedback"> {{ $message }} </div>
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

@endsection
