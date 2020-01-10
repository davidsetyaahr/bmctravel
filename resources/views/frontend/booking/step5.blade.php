<div class="body-data" style="position:relative">
    <div class="bg-bmc">
        <img src="{{ url('public/direngine/images/BMC-Logo.png') }}" alt="">
        <p>BMC Travel Service</p>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table width="100%" cellpadding="5" style="font-size :14px;">
                <tr>
                    <td class="bold">Name</td>
                    <td>:</td>
                    <td>{{$firstname}} {{$lastname}}</td>
                </tr>
                <tr>
                    <td class="bold">Email</td>
                    <td>:</td>
                    <td>{{$email}}</td>
                </tr>
                <tr>
                    <td class="bold">Person / Pax</td>
                    <td>:</td>
                    <td>{{$pax}} Pax</td>
                </tr>
                <tr>
                    <td class="bold">Package</td>
                    <td>:</td>
                    <td><a href="">{{$package}}</a></td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <table width="100%" cellpadding="5" style="font-size :14px;">
                <tr>
                    <td class="bold">Type</td>
                    <td>:</td>
                    <td>{{$type}}</td>
                </tr>
                <tr>
                    <td class="bold">Durations</td>
                    <td>:</td>
                    <td>{{$day}} Days {{$night}} Nights</td>
                </tr>
                <tr>
                    <td class="bold">Travel Date</td>
                    <td>:</td>
                    <td>{{$start_date}} - {{$end_date}}</td>
                </tr>
                <tr>
                    <td class="bold">Attachment</td>
                    <td>:</td>
                    <td><a href="#" class="color-blue" data-toggle="modal" data-target="#attach">View here</a></td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <p class="bold color-blue">Payment Option, transfer to:</p>
            <div class="bank-list">
                <img src="{{ url('public/images/common/bri.png') }}" alt="">
                <img src="{{ url('public/images/common/bni.png') }}" alt="">
                <img src="{{ url('public/images/common/mandiri.png') }}" alt="">
                <img src="{{ url('public/images/common/mastercard.png') }}" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <br>
            <h4 class="bold color-orange text-right">IDR {{$price}}</h4>
        </div>
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
        <img src="{{url('images/attach/'.$attach)}}" alt="" class="img-fluid">
      </div>

    </div>
  </div>
</div>
