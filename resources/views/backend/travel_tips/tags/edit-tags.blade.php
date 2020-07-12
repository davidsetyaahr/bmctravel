@extends('backend.template.main')
@section('insert_caption',' Edit Tips Tag')
@section('view_caption','View All Tips Tag')
{{-- @section('insert_link',url("admin/travel-tips/add-tags")) --}}
@section('view_link',url("admin/travel-tips/tags"))
{{-- @section('show_link','edit-tags') --}}
@section('view_status','')
@section('insert_status','')
@section('pagetitle','Tags')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @foreach ($id_tag as $tt)
                <form action="{{url("admin/travel-tips/tags/update")}}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $tt->id_tag }}">
                        <label for="">Edit Tag</label>
                        <input type="text" class="form-control @error('tag_name') is-invalid @enderror" name="tag_name" value="{{ $tt->tag_name}}">
                        @error('tag_name')
                            <div class="invalid-feedback"> {{ $message}} </div>
                            @enderror
                    <br>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
