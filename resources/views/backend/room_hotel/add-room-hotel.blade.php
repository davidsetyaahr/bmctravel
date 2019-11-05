@extends('backend.template.main')
@section('insert_caption','Insert New Room Hotel')
@section('view_caption','View All Hotel')
@section('insert_link',url("admin/room-hotel/add-room-hotel"))
@section('view_link',url("admin/hotel/room-hotel"))
@section('view_status','')
@section('insert_status','active')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @include('backend.gallery.gallery-template.select-gallery', ['type' => 'multiple', 'gallery' => $gallery, 'categories' => $categories])
                <form action="/admin/room-hotel/add-room-hotel" method="post">
                @csrf
                    <label for="">Hotel Name</label>
                        <select class="select form-control @error('id_hotel') is-invalid @enderror" name="id_hotel" id=""
                        value="{{ old('id_hotel')}}">
                            <option value="">---Select---</option>
                                @foreach($hotels as $htl)
                            <option value="{{ $htl->id_hotel }}">{{ $htl->hotel_name}}</option>
                                @endforeach 
                        </select>
                        @error('id_hotel')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <label for="">Room Name</label>
                <input type="text" class="form-control @error('room_name') is-invalid @enderror" name="room_name"
                value="{{ old('room_name')}}">
                @error('room_name')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <label for="">Gallery</label>
                @include('backend.gallery.gallery-template.gallery-hidden')
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </form>
            </div>
        </div>
    </div>
</div>
@include('backend.gallery.gallery-template.modal-gallery')
@endsection
