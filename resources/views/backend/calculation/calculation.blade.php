@extends('backend.template.main')
@section('insert_caption','')
@section('view_caption','')
@section('insert_link','')
@section('view_link','')
@section('view_status','')
@section('insert_status','')
@section('admin')
@section('pagetitle','Calculation')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @foreach($bookings as $book)
                <div class="table-responsive">
                    <table class="table " width="100%">
                        <tr>
                            <td>
                                <b>Package</b>
                            </td>
                            <td>:</td>
                            <td>{{ $book->tour_name}}</td>
                            <td>
                                <b>User</b>
                            </td>
                            <td>:</td>
                            <td>{{ $book->email}}</td>
                        </tr>
                        <tr>
                            <td>
                                <b>Booking Date</b>
                            </td>
                            <td>:</td>
                            <td>{{ date("l, d F Y", strtotime($book->booking_date))}}</td>
                            <td>
                                <b>Pax</b>
                            </td>
                            <td>:</td>
                            <td>{{$book->pax}}</td>
                        </tr>
                        <tr>
                        <td>
                                <b>Travel Start</b>
                            </td>
                            <td>:</td>
                            <td>{{ date("l, d F Y",strtotime($book->travel_date))}}</td>
                            <td>
                            <b>Travel Finish</b>
                            </td>
                            <td>:</td>
                            <?php 
                                $plus = $book->day-1;
                            ?>
                            <td>{{ date("l, d F Y",strtotime($book->travel_date." +$plus day"))}}</td>
                        </tr>
                        <tr>
                        <td>
                                <b>Durations</b>
                            </td>
                            <td>:</td>
                            <td>{{ $book->day}} Days {{$book->night}} Nights</td>
                        <td>
                                <b>Total</b>
                            </td>
                            <td>:</td>
                            <td>{{ number_format($book->price,0,',','.')}}</td>
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                            <form action="{{url('admin/calculation/show')}}" method="post">
                            <input type="hidden" name="id_booking" value="{{$book->id_booking}}">
                        <div class="row">
                            <div class="col-md-12 place-calc" data-count="1">
                                    @csrf
                                    @include('backend.calculation.loop-calculation',['calculation' => $calculation,'id' => 1])
                            </div>
                            <div class="col-md-12">
                                <br>
                                <a href="" class="btn btn-default new-calc" data-url="{{url('admin/calculation/newcalc')}}">Add New</a>
                            </div>
                        </div>
                <hr>
                <div class="row" style="padding-right : 20px;padding-left : 20px">
                    <div class="col-md-3">
                        <h4>Total Calculation</h4>
                    </div>
                    <div class="col-md-9 text-right">
                        <h4 class="color-orange" id="idr"><span>IDR</span> <span id="change">0</span></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" id="profit" data-price="{{$book->price}}">
                            <h4>Profit : <span id="percent">100</span>% 
                                <span>
                                    <span id="change" class="float-right"></span>
                                </span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Print Calculcation">
                    </div>
                </div>
            </form>
            </div>
        </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
