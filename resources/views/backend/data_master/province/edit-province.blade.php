@extends('backend.template.main')
@section('insert_caption','Insert New Province')
@section('view_caption','View All Province')
@section('insert_link','add-province')
@section('view_link','province')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Province')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="{{url("admin/data-master/update-province")}}" method="post">
            @csrf
                <label for="">Provinsi</label>
                <input type="hidden" name="id_province" value="{{ $province[0]->id_province }}">
                <input type="text" class="form-control" name="province_name" value="{{ $province[0]->province_name }}">
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
