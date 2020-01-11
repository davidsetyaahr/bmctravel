@extends('frontend/myAccount/my-account')
@section('menu-account')
<style>
.upload-btn-wrapper .btn div:before{
    top : 4px;
    left : 4px; 
}
</style>
    <div class="alert alert-info">
        <h6 class="bold">{{$booking->tour_name}} - {{$booking->day}} Days {{$booking->night}} Nights</h6>
    </div>
    <form action="{{url('my-account/paymentaction')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_booking" value="{{$booking->id_booking}}">
    <div class="row">
        <div class="col-md-3">
            <p class="bold mb-2">Bank Option</p>
            <select name="bank_option" id="" class="form-control normal custom">
                <option value="">---Option---</option>
                @foreach($bank as $b)
                    <option value="{{$b->id_bank}}">{{$b->bank_name}} - {{$b->number}} ({{$b->name}})</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <p class="bold mb-2">Payment Option</p>
            <select name="payment_option" id="" class="form-control normal custom payment-option" data-price="{{$booking->price}}">
                <option value="100">Full 100%</option>
                <option value="50">50%  Payment</option>
            </select>
        </div>
        <div class="col-md-3">
            <p class="bold mb-2">Total</p>
            <input type="text" name="" class="form-control normal custom" id="total" value="{{number_format($booking->price,0,',','.')}}" disabled>
        </div>
        <div class="col-md-3">
            <p class="bold mb-2">Kekurangan</p>
            <input type="text" name="" class="form-control normal custom" id="min" value="{{number_format($booking->price,0,',','.')}}" disabled>
        </div>
    </div>
    <br>
    <div class="attach" style="padding : 1%">
        <div class="left" style="margin-top : 4%">
            <div class="upload-btn-wrapper">
                    <button class="btn">
                        <div>
                            <img src="{{ url('public/images/common/image.png') }}" alt="">
                            <p>Upload your proof of payment</p>
                        </div>
                    </button>
                    <input type="file" name="attach" id="fileUpload">
            </div>
        </div>
        <div class="right" style="width:30%;height:98%">
            <div id="image-holder" class="text-center" style="height:100%">
            </div>
        </div>
    </div>  
    <br>
    <div class="text-right">
        <input type="reset" class="btn btn-default bold" value="Reset">
        <input type="submit" class="btn btn-warning bold" value="Upload">
    </div>
</form>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <p class="bold color-blue">Payment Option, transfer to:</p>
            <div class="bank-list">
                @foreach($bank as $b)
                    <img src="{{ url('images/gallery/'.$b->img) }}" alt="">
                @endforeach
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
        <h5 class="modal-title">Attachment</h5>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <img src="{{url('images/attach/'.$booking->identity_card)}}" alt="" class="img-fluid">
      </div>

    </div>
  </div>
</div>
@endsection