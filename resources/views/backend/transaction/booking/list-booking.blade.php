@extends('backend.template.main')
@section('insert_caption','Insert New Booking')
@section('view_caption','View All Booking')
@section('insert_link','add-booking')
@section('view_link','list-booking')
@section('view_status','active')
@section('insert_status','')
@section('admin')
@section('pagetitle','Booking')

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
                            <th>Tour name</th>
                            <th>Booking date</th>
                            <th>Travel date</th>
                            <th>Email</th>
                            <th>Pax</th>
                            <th>Price</th>
                            <th>Identity card</th>
                            <th>Status</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($bookings as $b)
                            <tr>
                                <th>{{ $loop->iteration}}</th>
                                <td>{{ $b->tour_name }}</td>
                                <td>{{ $b->booking_date }}</td>
                                <td>{{ $b->travel_date }}</td>
                                <td>{{ $b->email }}</td>
                                <td>{{ $b->pax }}</td>
                                <td>{{ $b->price }}</td>
                                <td>{{ $b->identity_card }}</td>
                                <td>{{ $b->status }}</td>

                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-sm btn-default dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Options
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="edit-categories/{{ $b->id_booking }}">Edit</a>
                                        </div>
                                    </div>
                                </td>
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
