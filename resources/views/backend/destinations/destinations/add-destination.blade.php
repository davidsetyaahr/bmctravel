@extends('backend.template.main')
@section('insert_caption','Insert New Destination')
@section('view_caption','View All Destination')
@section('insert_link','add-destination')
@section('view_link','list')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            <form action="{{ url('admin/destinations/destinations/insert-destination') }}" method="post">
                {{ csrf_field()}}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 m-t-15">
                                <label for="">Destination Name</label>
                                <input type="text" name="destination_name" class="form-control" placeholder="Destination Name">
                                @if($errors->has('Destination Name'))
                                <div class="text-danger small">
                                    {{ $errors->first('Destination Name') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">Category</label>
                                <select class="select2 form-control custom-select select2-hidden-accessible" name="id_category" id="">
                                    <option value="">---Select---</option>
                                </select>
                                @if($errors->has('Category'))
                                <div class="text-danger small">
                                    {{ $errors->first('Category') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">City & Province</label>
                                <select class="select2 form-control custom-select select2-hidden-accessible" name="id_city" id="">
                                    <option value="">---Select---</option>
                                </select>
                                @if($errors->has('City'))
                                <div class="text-danger small">
                                    {{ $errors->first('City') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">MAP</label>
                                <input type="text" name="map" class="form-control">
                                @if($errors->has('Map'))
                                <div class="text-danger small">
                                    {{ $errors->first('Map') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">Photo Uploud</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"  name="gallery" >
                                    <label class="custom-file-label" for="validatedCustomFile">
                                    Choose File...
                                    </label>
                                </div>
                                @if($errors->has('Gallery'))
                                <div class="text-danger small">
                                    {{ $errors->first('Gallery') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-12 text-center m-t-30">
                                <label for="">OverView</label>
                                <div id="editor-overview" style="height: 300px;">
                                        <p>Hello World!</p>
                                        <p>Some initial <strong>bold</strong> text</p>
                                    <p>
                                        <br>
                                    </p>
                                </div>
                                @if($errors->has('Overview'))
                                <div class="text-danger small">
                                    {{ $errors->first('Overview') }}
                                </div>
                                @endif
                            </div>
                            <div class="col-md-12 text-center m-t-30">
                                <label for="">Information</label>
                                <div id="editor-information" style="height: 300px;">
                                    <p>Hello World!</p>
                                    <p>Some initial <strong>bold</strong> text</p>
                                    <p>
                                        <br>
                                    </p>
                                </div>
                                @if($errors->has('Information'))
                                <div class="text-danger small">
                                    {{ $errors->first('Information') }}
                                </div>
                                @endif
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
