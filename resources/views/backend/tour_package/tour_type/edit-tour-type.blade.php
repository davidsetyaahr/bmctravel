@extends('backend.template.main')
@section('insert_caption','Insert New Tour Type')
@section('view_caption','View All Tour Type')
@section('insert_link',url("admin/tour-package/add-tour-type"))
@section('view_link',url("admin/tour-package/tour-type"))
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @foreach ($tour_type as $item)

                @include('backend.gallery.gallery-template.select-gallery', ['type' => 'single', 'gallery' => $gallery, 'categories' => $categories,'id_gallery' => $item->id_gallery])
                <form action="/admin/tour-package/tour-type/update" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id_type}}">
                    <label for="">Nama Tipe Wisata</label>
                    <input type="text" class="form-control @error('type_name') is-invalid @enderror" name="type_name" value=" {{ $item->type_name }}">
                    @error('type_name')
                    <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                    <br>
                    <label for="">Galeri</label>
                    @include('backend.gallery.gallery-template.gallery-hidden', ['id_gallery' => $item->id_gallery])
                    <br>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@include('backend.gallery.gallery-template.modal-gallery')
@endsection
