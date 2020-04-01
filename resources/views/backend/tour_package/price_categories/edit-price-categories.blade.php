@extends('backend.template.main')
@section('insert_caption','Insert New Price')
@section('view_caption','View All Price')
@section('insert_link',url("admin/tour-package/add-price-categories"))
@section('view_link',url("admin/tour-package/price-categories"))
@section('view_status','')
@section('insert_status','')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @foreach($price_categories as $prc)
            <form action="/admin/tour-package/price-categories/update" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $prc->id_price_category }}">
                <label for="">Mulai Pax</label>
                <input type="text" class="form-control @error('start_pax') is-invalid @enderror" name="start_pax" value="{{ $prc->start_pax}}">
                @error('start_pax')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <label for="">Batas Pax</label>
                <input type="text" class="form-control @error('end_pax') is-invalid @enderror" name="end_pax" value="{{ $prc->end_pax}}">
                @error('end_pax')
                    <div class="invalid-feedback"> {{ $message}} </div>
                    @enderror
                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Simpan</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
