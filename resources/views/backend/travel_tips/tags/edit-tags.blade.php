@extends('backend.template.main')
@section('insert_caption','Insert New Tips Tag')
@section('view_caption','View All Tips Tag')
@section('insert_link','add-tags')
@section('show_link','edit-tags')
@section('view_link','tags')
@section('view_status','')
@section('insert_status','')

@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <label for="">Edit</label>
                <input type="text" class="form-control">
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </div>
        </div>
    </div>
</div>

@endsection
