@extends('backend.template.main')
@section('insert_caption','Insert New Gallery')
@section('view_caption','View All Gallery')
@section('insert_link','add-gallery')
@section('view_link','gallery')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Gallery')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="{{url("admin/gallery/add-gallery")}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <label for="" class="">Galeri Foto</label>
                        <input type="file" name="img" class="form-control @error('img') is-invalid @enderror">
                        @error('img')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                        <br>
                        <label for="">Kategori Galeri</label>
                        <select class="form-control" name="id_category" id="">
                            @foreach ($id_category as $item)
                                <option value="{{ $item->id_category }}"> {{ $item->category_name }} </option>
                            @endforeach
                        </select>
                        <br>
                        <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                        <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
