@extends('backend.template.main')
@section('insert_caption','Insert New Price')
@section('view_caption','View All Price')
@section('insert_link','add-price-categories')
@section('view_link','price-categories')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="" method="post">
            @csrf
                <label for="">Start Pax</label>
                <input type="text" class="form-control" name="start_pax"><br>
                <label for="">End Pax</label>
                <input type="text" class="form-control" name="end_pax"><br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection
