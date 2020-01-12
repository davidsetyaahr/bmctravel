@extends('backend.template.main')
@section('insert_caption','')
@section('view_caption','')
@section('insert_link','')
@section('view_link','')
@section('view_status','')
@section('insert_status','')
@section('admin')
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-4">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                                <h5 class="text-white">
                                    Income on {{date('F')}}
                                    <br>
                                    {{number_format($income,0,',','.')}}
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                                <h5 class="text-white">
                                    Booking on {{date('F')}}
                                    <br>
                                    {{$count[0]->ttl}}
                                </h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-currency-usd"></i></h1>
                                <h5 class="text-white">
                                    Tour Packages
                                    <br>
                                    {{$package[0]->ttl}}
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
@endsection
