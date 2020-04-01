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
            <form action="{{url("admin/data-master/update")}}" method="post">
            @csrf
            <input type="hidden" name="id_city" value="{{$city[0]->id_city}}">
                <select id="" class="form-control" name="province_id">
                    <option value="">--Pilih Provinsi--</option>
                    @foreach ($prov as $keyProv) ?>
                        <option value="{{ $keyProv->id_province }}" {{ $city[0]->province_id == $keyProv->id_province ? 'selected' : '' }} >{{ $keyProv->province_name}} </option>
                    @endforeach
                </select>
                <br>
                <label for="">Kota</label>
                <input type="text" class="form-control" name="city_name" value="{{$city[0]->city_name}}">
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
