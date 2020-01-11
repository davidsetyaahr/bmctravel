<html lang="en">
<head>
    <title>Bmc Travel Service - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/ionicons.min.css') }}">

</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="success-page">
                    <div class="booking" style="margin-bottom : 20px;">
                        <div class="top">
                            <img src="{{ url('public/direngine/images/BMC-Logo.png') }}" alt="">
                        </div>
                    </div>

                    <div class="img">
                        <img src="{{url('public/images/common/mountain.png')}}" alt="">
                        <p>Thank You</p>
                    </div>
                    <p class="bold">Your Booking Is Successfull</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis alias tempora recusandae tempore eveniet ipsam reprehenderit ut laudantium distinctio nemo ipsum voluptates dolores sed expedita aperiam magnam obcaecati, veniam cupiditate.</p>
                    <div class="link">
                    <a href="" class="payment">Payment</a>
                    &nbsp;
                    <a href="{{url('my-account')}}">My Account</a>
                    </div>
                    <div class="bank-list mt-10">
                        <img src="{{ url('public/images/common/bri.png') }}" alt="">
                        <img src="{{ url('public/images/common/bni.png') }}" alt="">
                        <img src="{{ url('public/images/common/mandiri.png') }}" alt="">
                        <img src="{{ url('public/images/common/mastercard.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('public/direngine/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/direngine/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/frontend.js') }}"></script>
  </body>
</html>