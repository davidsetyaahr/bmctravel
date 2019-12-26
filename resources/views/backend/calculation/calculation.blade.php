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
                <div class="table-responsive">
                    <table class="table " width="100%">
                        <tr>
                            <td>
                                <b>Kode Booking</b>
                            </td>
                            <td>:</td>
                            <td></td>
                            <td>
                                <b>User</b>
                            </td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Booking Date</b>
                            </td>
                            <td>:</td>
                            <td></td>
                            <td>
                                <b>Travel Date</b>
                            </td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <b>Package</b>
                            </td>
                            <td>:</td>
                            <td></td>
                            <td>
                                <b>Total</b>
                            </td>
                            <td>:</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Label</label>
                        <select name="" class="form-control" id="">
                            <option value="">---Option---</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <label for="">Amount</label>
                        <input type="number" class="form-control" value="1">
                    </div>
                    <div class="col-md-3">
                        <label for="">Subtotal</label>
                        <input type="number" class="form-control" value="0" readonly>
                    </div>
                    <div class="col-md-2">
                    <label for="">Options</label>
                    <div class="dropdown">
                        <button type="button" class="btn btn-default btn-block dropdown-toggle" data-toggle="dropdown">
                            Option
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><span class="mdi mdi-delete"></span> Remove</a>
                            <a class="dropdown-item add-new-trip1" id='1' href="package?="><span class="mdi mdi-plus"></span> Add New</a>
                        </div>
                    </div>
                </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3">
                        <h3>Total Calculation</h3>
                    </div>
                    <div class="col-md-9 text-right">
                        <h3 class="color-orange">IDR. 21,000,000</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <a href="" class="btn btn-danger">Download PDF</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
