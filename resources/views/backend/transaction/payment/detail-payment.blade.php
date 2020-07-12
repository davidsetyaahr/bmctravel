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
                            <td class="bold">Nama</td>
                            <td>:</td>
                            <td>{{$payment->firstname}} {{$payment->lastname}}</td>
                        </tr>
                        <tr>
                            <td class="bold">Orang / Pax</td>
                            <td>:</td>
                            <td>{{$payment->pax}} pax</td>
                        </tr>
                        <tr>
                            <td class="bold">Paket</td>
                            <td>:</td>
                            <td><a href="">{{$payment->tour_name}}</a></td>
                        </tr>
                        <tr>
                            <td class="bold">Tipe</td>
                            <td>:</td>
                            <td>{{$payment->type_name}}</td>
                        </tr>
                        <tr>
                            <td class="bold">Durasi</td>
                            <td>:</td>
                            <td>{{$payment->day}} Hari {{$payment->night}} Malam</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table width="100%" cellpadding="5" style="font-size :14px;">
                        <tr>
                            <td class="bold">Mulai Travel</td>
                            <td>:</td>
                            <td>{{ date("l, d F Y", strtotime($payment->travel_date)) }}</td>
                        </tr>
                        <tr>
                            <td class="bold">Travel Berakhir</td>
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
                            <td class="bold">Pembayaran</td>
                            <td>:</td>
                            <td>IDR 
                                <?php 
                                    if($payment->status==11){
                                        $method = "50%";
                                        $pay =  $payment->price/2;
                                    }
                                    else{
                                        $method = "100%";
                                        $pay = $payment->price;
                                    }
                                    echo number_format($pay,0,',','.')." ($method)";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class="bold">Lampiran</td>
                            <td>:</td>
                            <td><a href="" data-toggle="modal" data-target="#attach">Lihat Lampiran</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <hr>
                    <?php 
                        if($payment->status=='11' || $payment->status=='22' || $payment->status=='222'){
                    ?>
                    <a href="{{url('admin/transaction/payment/status/'.$payment->id_payment.'?status=0')}}" class="btn btn-default">Tolak</a>
                    <a href="{{url('admin/transaction/payment/status/'.$payment->id_payment.'?status=1')}}" class="btn btn-success" id="accPayment">Terima</a>
                    <?php } ?>
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
        <h5 class="modal-title">Lampiran</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <img src="{{url('images/attach/'.$payment->attachment)}}" alt="" class="img-fluid">
      </div>

    </div>
  </div>
</div>

@endsection
