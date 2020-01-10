@extends('backend.template.main')
@section('insert_caption','Insert New Categories')
@section('view_caption','View All Categories')
@section('insert_link',url("admin/destinations/add-categories"))
@section('view_link',url("admin/destinations/categories"))
@section('view_status','')
@section('insert_status','')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @foreach($destination_categories as $dc)
            @include('backend.gallery.gallery-template.select-gallery', ['type' => 'multiple', 'gallery' => $gallery, 'categories' => $categories, 'id_gallery' => $dc->id_gallery])
            <form action="{{url("admin/destinations/categories/update")}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $dc->id_category }}">
                <label for="">Categories Name</label>
                <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" value="{{ $dc->category_name}}">
                @error('category_name')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <div class="col-md-12 m-t-15">
                    <label for="">Gallery</label>
                    @include('backend.gallery.gallery-template.gallery-hidden', ['id_gallery' => $dc->id_gallery])
                </div>
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
