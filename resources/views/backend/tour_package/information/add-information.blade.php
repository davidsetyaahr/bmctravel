@extends('backend.template.main')
@section('insert_caption','Insert New Information')
@section('view_caption','View All Information')
@section('insert_link','add-information')
@section('view_link','information')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Information')

@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <form action="{{url("admin/tour-package/add-information")}}" method="post">
                    @csrf
                        <label for="">Information Name</label>
                        <input type="text" class="form-control @error('Information') is-invalid @enderror" name="text">
                        @error('Information')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror       
                        <br>
                        <label for="">Type</label>
                        <select name="type" id="" class="form-control">
                                <option value="0">Include</option>
                                <option value="1">Exclude</option>
                                <option value="2">What should I pack</option>
                        </select>
                        <br>
                        <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                        <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
