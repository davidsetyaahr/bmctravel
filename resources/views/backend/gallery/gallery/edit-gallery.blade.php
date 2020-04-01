@extends('backend.template.main')
@section('insert_caption','Insert New Gallery')
@section('view_caption','View All Gallery')
@section('insert_link',url("admin/gallery/add-gallery"))
@section('view_link',url("admin/gallery/list-gallery"))
@section('view_status','')
@section('insert_status','')
@section('pagetitle','Gallery')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url("admin/gallery/update")}}" method="post">
                    @csrf
           @foreach($id_gallery as $gc)
            <input type="hidden" name="id" value="{{ $gc->id_gallery }}">
            @endforeach
                <label for="">Galeri Foto</label>
                <input type="file" class="form-control" name="img">
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
