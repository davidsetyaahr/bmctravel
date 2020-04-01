@extends('backend.template.main')
@section('insert_caption','Insert New Destination')
@section('view_caption','View All Destination')
@section('insert_link','add-destination')
@section('view_link','list')
@section('view_status','')
@section('insert_status','active')
@section('admin')
@section('pagetitle','Add New Destination')


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @include('backend.gallery.gallery-template.select-gallery', ['type' => 'multiple', 'gallery' => $gallery, 'categories' => $categories])
            <form action="{{ url('admin/destinations/destinations/add-destination') }}" method="post">
                {{ csrf_field()}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 m-t-15">
                                <label for="">Nama Destinasi/Tujuan</label>
                                <input type="text" name="destination_name" class="form-control  @error('destination_name') is-invalid @enderror" placeholder="Destination Name"
                                value="{{ old('destination_name')}}">
                                @error('destination_name')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">Kategori</label>
                                <select class="select form-control @error('id_category') is-invalid @enderror" name="id_category" id=""
                                value="{{ old('id_category')}}">
                                    <option value="">---Pilih---</option>
                                    @foreach($destination_categories as $c)
                                    <option value="{{ $c->id_category }}">{{ $c->category_name}}</option>
                                    @endforeach
                                </select>
                                 @error('Category')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                                </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">Kota & Provinsi</label>
                                <select class="form-control custom-select @error('id_city') is-invalid @enderror" name="id_city" id=""
                                value="{{ old('id_city')}}">
                                    <option value="">---Pilih---</option>
                                    @foreach($city as $cty)
                                    <option value="{{ $cty->id_city }}">{{ $cty->city_name}}</option>
                                    @endforeach
                                </select>
                                @error('City')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                                </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Aktifitas Perjalanan</label>
                                <div class="bg-light p-10">
                                    @foreach($activities as $act)
                                    <div class="form-check custom-control custom-checkbox mb-2">
                                        <input type="checkbox" class="form-check-input custom-control-input" id="check{{$act->id_activities}}" name="activities[]" value="{{$act->id_activities}}">
                                        <label class="custom-control-label" for="check{{$act->id_activities}}">
                                        {{$act->activities}}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Galeri</label>
                                @include('backend.gallery.gallery-template.gallery-hidden')
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Map</label>
                                <input type="text" name="map" class="form-control @error('map') is-invalid @enderror" value="{{ old('map')}}">
                                @error('map')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-12 m-t-30">
                                <label for="">Gambaran</label>
                                <textarea class="form-control @error('overview') is-invalid @enderror" name="overview" id="" cols="30" rows="10">
                                {{ old('overview')}}</textarea>
                                @error('overview')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-12 text-center m-t-15">
                                <label for="">Informasi</label>
                                <textarea class="form-control @error('information') is-invalid @enderror" id="konten" name="information" cols="30" rows="10">
                                {{ old('information')}}</textarea>
                                @error('information')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
