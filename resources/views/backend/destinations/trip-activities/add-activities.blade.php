@extends('backend.template.main')
@section('insert_caption','Insert New Activities')
@section('view_caption','View All Activities')
@section('insert_link','add-activities')
@section('view_link','activities')
@section('view_status','')
@section('insert_status','active')
@section('admin')
@section('pagetitle','Add New Activities')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="{{url("admin/destinations/add-activities")}}" method="post">
            @csrf
                <label for="">Aktivitas</label>
                <input type="text" class="form-control @error('activities') is-invalid @enderror" name="activities"
                value="{{ old('activities')}}">
                @error('activities')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </div>
        </div>
    </div>
</div>

@endsection
