@extends('backend.template.main')
@section('insert_caption','Insert New City')
@section('view_caption','View All City')
@section('insert_link','add-City')
@section('view_link','city')
@section('view_status','')
@section('insert_status','active')
@section('pagetitle','City')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="/bmctravel/admin/data-master/add-city" method="post">
            @csrf
            <label for="">Provinsi</label>
                <select id="" class="form-control" name="province_id">
                    <option>----Pilih------</option>
                    @foreach ($province as $prov) ?>
                    <option value="{{ $prov->id_province }}">{{ $prov->province_name }} </option>
                    @endforeach
                </select>
                <br>
                <label for="">Kota</label>
                <input type="text" class="form-control @error('city_name') is-invalid @enderror" name="city_name"
                value="{{ old('city_name')}}">
                @error('city_name')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
