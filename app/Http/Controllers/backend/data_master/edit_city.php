@extends('backend.template.main')
@section('insert_caption','Insert New City')
@section('view_caption','View All City')
@section('insert_link','add-City')
@section('view_link','city')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="/admin/data-master/add-city" method="post">
            @csrf
                <select id="" class="form-control" name="city_name">
                    @foreach ($province_id as $prov)
                    <option value="{{ $prov->province_id}}">{{$prov->city_name}} </option>
                    @endforeach
                </select>
                <br>
                <label for="">City</label>
                <input type="text" class="form-control" name="city_name">
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection