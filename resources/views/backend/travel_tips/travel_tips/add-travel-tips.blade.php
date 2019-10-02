@extends('backend.template.main')
@section('insert_caption','Insert New Travel Tips')
@section('view_caption','View All Travel Tips')
@section('insert_link','add-travel-tips')
@section('view_link','list')
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 m-t-15">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">Admin</label>
                                <input type="text" name="id_admin" class="form-control" placeholder="Admin Name">
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">City & Province</label>
                                <select class="select2 form-control custom-select select2-hidden-accessible" name="id_city" id="">
                                    <option value="">---Select---</option>
                                </select>
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">MAP</label>
                                <input type="text" name="map" class="form-control">
                            </div>
                            <div class="col-md-6 m-t-15">
                                <label for="">Photo Uploud</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"  name="gallery" >
                                    <label class="custom-file-label" for="validatedCustomFile">
                                    Choose File...
                                    </label>
                                </div>
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
