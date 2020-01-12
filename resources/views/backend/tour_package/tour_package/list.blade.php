@extends('backend.template.main')
@section('insert_caption','Insert New Tour Package')
@section('view_caption','View All Tour Package')
@section('insert_link','add-tour-package?page=1')
@section('view_link','tour-package')
@section('view_status','active')
@section('insert_status','')
@section('admin')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Tour Name</th>
                            <th>Category</th>
                            <th>Tipe</th>
                            <th>Durations Day</th>
                            <th>Durations Night</th>
                            <th>Overview</th>
                            <th>Gallery</th>
                            <th>Price</th>
                            <th>Sale</th>
                            <th>Meeting Point</th>
                        </thead>
                        <tbody>
                        @foreach($tour_packages as $tp)
                            <tr>
                            <th>{{ $loop->iteration}}</th>
                                <th>{{$tp->tour_name}}</th>
                                <th>{{$tp->category_name}}</th>
                                <th>{{$tp->type_name}}</th>
                                <th>{{$tp->day}}</th>
                                <th>{{$tp->night}}</th>
                                <th>{{substr(strip_tags($tp->overview),0,100).'...'}}</th>

                                <th><img style="height: 50px; width: 50px;" src="{{ url('images/gallery/'.$tp->img) }}" alt="" class="img-fluid transition"></th>
                                {{-- <th>{{$tp->img}}</th> --}}
                                <th>{{$tp->price}}</th>
                                <th>{{$tp->sale}}</th>
                                <th>{{$tp->meeting_point}}</th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
