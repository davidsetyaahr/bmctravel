@extends('frontend/myAccount/my-account')
@section('menu-account')
<div class="bg-bmc">
        <img src="{{ url('public/direngine/images/BMC-Logo.png') }}" alt="" style="height : 40%;width:15% ">
        <p>Baratha Travel Service</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table width="100%" cellpadding="5" style="font-size :14px;">
                <tr>
                    <td class="bold">Nama</td>
                    <td>:</td>
                    <td>{{$user->firstname}} {{$user->lastname}}</td>
                </tr>
                <tr>
                    <td class="bold">Orang / Pax</td>
                    <td>:</td>
                    <td>{{$booking->pax}} pax</td>
                </tr>
                <tr>
                    <td class="bold">Paket</td>
                    <td>:</td>
                    <td><a href="">{{$booking->tour_name}}</a></td>
                </tr>
                <tr>
                    <td class="bold">Tipe</td>
                    <td>:</td>
                    <td>{{$booking->type_name}}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <table width="100%" cellpadding="5" style="font-size :14px;">
                <tr>
                    <td class="bold">Durasi</td>
                    <td>:</td>
                    <td>{{$booking->day}} Malam {{$booking->night}} Malam</td>
                </tr>
                <tr>
                    <td class="bold">Mulai Travel</td>
                    <td>:</td>
                    <td>{{ date("l, d F Y", strtotime($booking->travel_date)) }}</td>
                </tr>
                <tr>
                    <td class="bold">Travel Berakhir</td>
                    <td>:</td>
                    <?php 
                        $plus = $booking->day-1;
                    ?>
                    <td>{{ date("l, d F Y", strtotime($booking->travel_date.' +'.$plus.' day')) }}</td>
                </tr>
                <tr>
                    <td class="bold">Lampiran</td>
                    <td>:</td>
                    <td><a href="#" class="color-blue" data-toggle="modal" data-target="#attach">Lihat disini</a></td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <p class="bold color-blue">Pilih Pembayaran, transfer ke:</p>
            <div class="bank-list">
                <img src="{{ url('public/images/common/bri.png') }}" alt="">
                <img src="{{ url('public/images/common/bni.png') }}" alt="">
                <img src="{{ url('public/images/common/mandiri.png') }}" alt="">
                <img src="{{ url('public/images/common/mastercard.png') }}" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <br>
            <h4 class="bold color-orange text-right">IDR {{number_format($booking->price,0,',','.')}}<h4>
        </div>
    </div>
    <div class="modal fade" id="attach">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Lampiran</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <img src="{{url('images/attach/'.$booking->identity_card)}}" alt="" class="img-fluid">
      </div>

    </div>
  </div>
</div>
@endsection