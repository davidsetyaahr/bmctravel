@extends('backend.template.main')
@section('insert_caption','Insert New Information')
@section('view_caption','View All Information')
@section('insert_link',url("/admin/tour-package/information/add-information"))
@section('view_link',url("/admin/tour-package/information"))
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','Information')

@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{url("admin/tour-package/information/add-information")}}" method="post">
                    @csrf
                        <label for="">Nama Informasi</label>
                        <input type="text" class="form-control @error('text') is-invalid @enderror" name="text">
                        @error('text')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                        <br>
                        <label for="">Tipe</label>
                        <select name="type" id="" class="form-control">
                            <option value="0">---Pilih---</option>
                            <option value="0">Termasuk</option>
                            <option value="1">Tidak Termasuk</option>
                            <option value="2">Apa yang harus aku siapkan?</option>
                        </select>
                        @error('type')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                        <br>
                        <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                        <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
