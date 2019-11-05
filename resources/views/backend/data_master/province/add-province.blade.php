@extends('backend.template.main')
@section('insert_caption','Insert New Province')
@section('view_caption','View All Province')
@section('insert_link','add-province')
@section('view_link','province')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="/admin/data-master/add-province" method="post">
            @csrf
                <label for="">Province</label>
                <input type="text" class="form-control @error('province_name') is-invalid @enderror" name="province_name"
                value="{{ old('province_name')}}">
                @error('province_name')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </form>
            </div>
        </div>
    </div>
</div>

@endsection