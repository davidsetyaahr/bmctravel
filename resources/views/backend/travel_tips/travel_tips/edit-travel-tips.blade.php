@extends('backend.template.main')
@section('insert_caption','Insert New Travel Tips')
@section('view_caption','View All Travel Tips')
@section('insert_link',url("admin/travel-tips/travel-tips/add-travel-tips"))
@section('view_link',url("admin/travel-tips/travel-tips/list"))
@section('view_status','')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @foreach($travel_tips as $trvltips)
            @include('backend.gallery.gallery-template.select-gallery', ['type' => 'multiple', 'gallery' => $gallery, 'categories' => $categories])
            <form action="/admin/travel-tips/travel-tips/update" method="post">
            {{ csrf_field()}}
            <input type="hidden" name="id" value="{{ $trvltips->id_travel_tips }}">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 m-t-15">
                                <label for="">Judul</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $trvltips->title}}">
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Galeri</label>
                                @include('backend.gallery.gallery-template.gallery-hidden')     
                            </div>
                                </div>
                                <div class="col-md-12 m-t-15">
                                <label for="">Isi Konten</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" cols="30" rows="10">{{ $trvltips->content}}</textarea>
                            </div>
                            </div>
                            <div class="col-12 m-t-15">
                                <label for="">Permalink</label>
                                <input type="text" name="permalink" class="form-control" value="{{ $trvltips->permalink}}">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
