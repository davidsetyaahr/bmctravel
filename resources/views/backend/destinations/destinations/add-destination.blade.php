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
                                <label for="">Destination Name</label>
                                <input type="text" name="destination_name" class="form-control  @error('destination_name') is-invalid @enderror" placeholder="Destination Name"
                                value="{{ old('destination_name')}}">
                                @error('destination_name')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">Category</label>
                                <select class="select form-control @error('id_category') is-invalid @enderror" name="id_category" id=""
                                value="{{ old('id_category')}}">
                                    <option value="">---Select---</option>
                                    @foreach($destination_categories as $c)
                                    <option value="{{ $c->id_category }}">{{ $c->category_name}}</option>
                                    @endforeach 
                                </select>
                                 @error('Category')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror 
                                </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">City & Province</label>
                                <select class="form-control custom-select @error('id_city') is-invalid @enderror" name="id_city" id=""
                                value="{{ old('id_city')}}">
                                    <option value="">---Select---</option>
                                    @foreach($city as $cty)
                                    <option value="{{ $cty->id_city }}">{{ $cty->city_name}}</option>
                                    @endforeach
                                </select>
                                @error('City')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror 
                                </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Gallery</label>
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
                                <label for="">OverView</label>
                                <textarea class="form-control @error('overview') is-invalid @enderror" name="overview" id="" cols="30" rows="10">
                                {{ old('overview')}}</textarea>
                                @error('overview')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                            <div class="col-md-12 text-center m-t-15">
                                <label for="">Information</label>
                                <textarea class="form-control @error('information') is-invalid @enderror" id="konten" name="information" cols="30" rows="10">
                                {{ old('information')}}</textarea>
                                @error('information')
                                    <div class="invalid-feedback"> {{ $message}} </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
