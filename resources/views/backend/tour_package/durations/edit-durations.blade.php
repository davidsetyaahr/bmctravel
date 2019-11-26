@extends('backend.template.main')
@section('insert_caption','Insert New Durations')
@section('view_caption','View All Durations')
@section('insert_link',url("admin/tour-package/add-durations"))
@section('view_link',url("admin/tour-package/durations"))
@section('view_status','')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                @foreach($tour_durations as $dura)
                    <form action="/admin/tour-package/durations/update" method="post">
                        @csrf
                    <input type="hidden" name="id" value="{{ $dura->id_duration }}">
                <label for="">Day</label>
                    <input type="text"  class="form-control @error('day') is-invalid @enderror" name="day" value="{{ $dura->day }}"><br>
                    @error('day')
                    <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror
                <label for="">Night</label>
                    <input type="text"  class="form-control @error('day') is-invalid @enderror" name="night" value="{{ $dura->night }}">
                    @error('night')
                    <div class="invalid-feedback"> {{ $message }} </div>
                    @enderror

                <br>
                <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
                <button class="btn btn-secondary" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
