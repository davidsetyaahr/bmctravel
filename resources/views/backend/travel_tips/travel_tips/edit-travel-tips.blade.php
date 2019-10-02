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
                            <div class="col-md-12 m-t-15">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="">
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Admin</label>
                                <input type="text" name="id_admin" class="form-control" placeholder="Admin Name" value="">
                            </div>
                            <div class="col-md-12 m-t-15">
                                <label for="">Photo Uploud</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"  name="gallery" >
                                    <label class="custom-file-label" for="validatedCustomFile">
                                    Choose File...
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 m-t-15">
                                <label for="">Permalink</label>
                                <input type="text" class="form-control" readonly>
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
