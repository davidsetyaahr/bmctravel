@extends('backend.template.main')
@section('insert_caption','Insert New Category')
@section('view_caption','View All Category')
@section('insert_link',url("/admin/tour-package/add-categories"))
@section('view_link',url("/admin/tour-package/categories"))
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @foreach ($tour_categories as $item)

                @include('backend.gallery.gallery-template.select-gallery', ['type' => 'single', 'gallery' => $gallery, 'categories' => $categories])
                <form action="/admin/tour-package/categories/update" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{ $item->id_category}}">
                    <label for="">Category Name</label>
                    <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{$item->category_name}}">
                    @error('category_name')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    <br>
                    <label for="">Gallery</label>
                    @include('backend.gallery.gallery-template.gallery-hidden')
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
