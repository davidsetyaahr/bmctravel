@extends('backend.template.main')
@section('insert_caption','')
@section('view_caption','View All Payment')
@section('insert_link','')
@section('view_link','list-Payment')
@section('view_status','active')
@section('insert_status','')
@section('admin')
@section('pagetitle','Payment')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                    <table width="100%" cellpadding="5" style="font-size :14px;">
                        <tr>
                            <td class="bold">Name</td>
                            <td>:</td>
                            <td>{{$payment->firstname}} {{$payment->lastname}}</td>
                        </tr>
                        <tr>
                            <td class="bold">Person / Pax</td>
                            <td>:</td>
                            <td>{{$payment->pax}} pax</td>
                        </tr>
                        <tr>
                            <td class="bold">Package</td>
                            <td>:</td>
                            <td><a href="">{{$payment->tour_name}}</a></td>
                        </tr>
                        <tr>
                            <td class="bold">Type</td>
                            <td>:</td>
                            <td>{{$payment->type_name}}</td>
                        </tr>
                        <tr>
                            <td class="bold">Durations</td>
                            <td>:</td>
                            <td>{{$payment->day}} Days {{$payment->night}} Nights</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table width="100%" cellpadding="5" style="font-size :14px;">
                        <tr>
                            <td class="bold">Travel Start</td>
                            <td>:</td>
                            <td>{{ date("l, d F Y", strtotime($payment->travel_date)) }}</td>
                        </tr>
                        <tr>
                            <td class="bold">Travel Finish</td>
                            <td>:</td>
                            <?php 
                                $plus = $payment->day-1;
                            ?>
                            <td>{{ date("l, d F Y", strtotime($payment->travel_date.' +'.$plus.' day')) }}</td>
                        </tr>
                        <tr>
                            <td class="bold">Total</td>
                            <td>:</td>
                            <td>IDR {{number_format($payment->price,0,',','.')}}</td>
                        </tr>
                        <tr>
                            <td class="bold">Payment</td>
                            <td>:</td>
                            <td>IDR 
                                <?php 
                                    if($payment->status==11){
                                        $method = "50%";
                                        $pay =  $payment->price/2;
                                    }
                                    else{
                                        $method = "100%";
                                        $pay = $payment;
                                    }
                                    echo number_format($pay,0,',','.')." ($method)";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">Attachment</td>
                            <td>:</td>
                            <td><a href="" data-toggle="modal" data-target="#attach">View Attachment</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <hr>
                    <a href="{{url('admin/transaction/payment/status/'.$payment->id_payment.'?status=0')}}" class="btn btn-default">Decline</a>
                    <a href="{{url('admin/transaction/payment/status/'.$payment->id_payment.'?status=1')}}" class="btn btn-success">Accept</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="attach">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Attachment</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <img src="{{url('images/attach/'.$payment->attachment)}}" alt="" class="img-fluid">
      </div>

    </div>
  </div>
</div>

@endsection
