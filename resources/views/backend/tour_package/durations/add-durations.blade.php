@extends('backend.template.main')
@section('insert_caption','Insert New Durations')
@section('view_caption','View All Durations')
@section('insert_link','add-durations')
@section('view_link','durations')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                    <form action="/admin/tour-package/add-durations" method="post">
                        @csrf
                <label for="">Day</label>
                    <input type="text" class="form-control @error('day') is-invalid @enderror" name="day" value="{{ old('day')}}">
                @error('day')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror

                <label for="">Night</label>
                <input type="text" class="form-control @error('night') is-invalid @enderror" name="night" value="{{ old('night')}}">
                @error('night')
                    <div class="invalid-feedback"> {{ $message }} </div>
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
