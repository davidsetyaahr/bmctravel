@extends('backend.template.main')
@section('insert_caption','Insert New Hotel')
@section('view_caption','View All Hotel')
@section('insert_link',url("admin/room-hotel/add-room-hotel"))
@section('view_link',url("admin/hotel/room-hotel"))
@section('view_status','')
@section('insert_status','')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @foreach($room_hotels as $r)
                @include('backend.gallery.gallery-template.select-gallery', ['type' => 'multiple', 'gallery' => $gallery, 'categories' => $categories,'id_gallery' => $r->gallery])
                <form action="{{url('admin/room-hotel/update')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $r->id_room_hotel }}">
                <label for="">Nama Hotel</label>
                        <select disabled class="select form-control @error('id_hotel') is-invalid @enderror" name="id_hotel" id=""
                        value="{{ old('id_hotel')}}">
                            <option value="">---Pilihan---</option>
                                @foreach($hotels as $htl)
                                <?php
                                    foreach ($room_hotels as $item) {
                                        $selected = ($htl->id_hotel == $item->id_hotel ? "selected":"");
                                    }
                                ?>
                            <option {{$selected}} value="{{ $htl->id_hotel }}">{{ $htl->hotel_name}}</option>
                                @endforeach
                        </select>
                        @error('id_hotel')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <label for="">Nama Kamar</label>
                <input type="text" class="form-control @error('room_name') is-invalid @enderror" name="room_name" value="{{ $r->room_name}}">
                @error('room_name')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <label for="">Galeri</label>
                @include('backend.gallery.gallery-template.gallery-hidden', ['id_gallery' => $r->gallery])
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@include('backend.gallery.gallery-template.modal-gallery')
@endsection
