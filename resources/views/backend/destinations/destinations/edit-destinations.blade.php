@extends('backend.template.main')
@section('insert_caption','Insert New Destination')
@section('view_caption','View All Destination')
@section('insert_link',url("admin/destinations/destinations/add-destination"))
@section('view_link',url("admin/destinations/destinations/list"))
@section('view_status','')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @foreach($destinations as $d)
            @include('backend.gallery.gallery-template.select-gallery', ['type' => 'multiple', 'gallery' => $gallery, 'categories' => $categories])
            <form action="{{url("admin/destinations/destinations/update")}}" method="post">
                {{ csrf_field()}}
                <input type="hidden" name="id" value="{{ $d->id_destination }}">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 m-t-15">
                                <label for="">Destination Name</label>
                                <input type="text" name="destination_name" value="{{ $d->destination_name}}" class="form-control" placeholder="Destination Name">
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">Category</label>
                                <select class="form-control" name="id_category" id="">
                                    <option value="">---Select---</option>
                                    @foreach($destination_categories as $c)
                                    <option value="{{ $c->id_category }}">{{ $c->category_name}}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">City & Province</label>
                                <select class="form-control" name="id_city" id="">
                                    <option value="">---Select---</option>
                                    @foreach($city as $cty)
                                    <option value="{{ $cty->id_city }}">{{ $cty->city_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Gallery</label>
                                @include('backend.gallery.gallery-template.gallery-hidden')
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Map</label>
                                <input type="text" name="map" value="{{ $d->map}}" class="form-control">
                            </div>
                            <div class="col-md-12 m-t-30">
                                <label for="">OverView</label>
                                <textarea class="form-control" name="overview" id="" cols="30" rows="10">{{ $d->overview}}</textarea>
                            </div>
                            <div class="col-md-12 text-center m-t-15">
                                <label for="">Information</label>
                                <textarea class="form-control" id="ckeditor1" name="information" cols="30" rows="10">{{ $d->information}}</textarea>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                    <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
