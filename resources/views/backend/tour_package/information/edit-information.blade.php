@extends('backend.template.main')
@section('insert_caption','Insert New Informations')
@section('view_caption','View All Informations')
@section('insert_link',url("/admin/tour-package/add-informations"))
@section('view_link',url("/admin/tour-package/information"))
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @foreach ($informations as $inf)

                <form action="{{url("admin/tour-package/informations/update")}}" method="post">
                @csrf
                    <input type="hidden" name="id" value="{{ $inf->id_informations}}">
                    <label for="">Text</label>
                    <input type="text" class="form-control @error('text') is-invalid @enderror" name="text" value="{{$inf->text}}">
                    @error('text')
                        <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    <br>
                        <label for="">Type</label>
                        <select name="type" id="" class="form-control">
                            <option value="">---Select---</option>
                            <option value="0" {{ $inf->type == 0 ? 'selected' : '' }}>Include</option>
                            <option value="1" {{ $inf->type == 1 ? 'selected' : '' }}>Exclude</option>
                            <option value="2" {{ $inf->type == 3 ? 'selected' : '' }}>What should I pack</option>
                        </select>
                    <br>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('backend.gallery.gallery-template.modal-gallery')
@endsection
