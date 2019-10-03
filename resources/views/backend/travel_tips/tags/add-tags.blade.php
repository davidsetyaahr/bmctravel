@extends('backend.template.main')
@section('insert_caption','Insert New Tags')
@section('view_caption','View All Tags')
@section('insert_link','add-tags')
@section('view_link','tags')
@section('view_status','')
@section('insert_status','active')
@section('admin')

<form action="/admin/travel-tips/tags" method="post">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <label for=""  value="id_travel_tips">Id Travel Tips</label>
                    <input type="text" class="form-control">
                    <label for=""  value="id_tag">Id Tag</label>
                    <input type="text" class="form-control">
                    <br>
                    <button class="btn btn-primary" type="submit" value="Creaate"><span class="mdi mdi-content-save"></span>  Save</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
