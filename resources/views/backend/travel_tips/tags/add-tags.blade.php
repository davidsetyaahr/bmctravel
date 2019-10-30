@extends('backend.template.main')
@section('insert_caption','Insert New Tags')
@section('view_caption','View All Tags')
@section('insert_link','add-tags')
@section('view_link','tags')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Tags')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="/admin/travel-tips/add-tags" method="post">
                @csrf
                    <br>
                    <label for="" >Tag Name</label>
                    <input type="text" class="form-control @error('tag_name') is-invalid @enderror" name="tag_name">
                    @error('tag_name')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    <br>
                    <button class="btn btn-primary" type="submit" value="Creaate"><span class="mdi mdi-content-save"></span>  Save</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
