@extends('backend.template.main')
{{-- @section('insert_caption','Insert New User') --}}
@section('view_caption','View All User')
@section('insert_link','add-user')
@section('view_link','user')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <label for="">Pengguna</label>
                <input type="text" class="form-control">
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </div>
        </div>
    </div>
</div>

@endsection
