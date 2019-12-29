<html lang="en">
  <head>
    <title>Bmc Travel Service - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/ionicons.min.css') }}">

  </head>
  <body class="bg-light" style='padding : 50px 0px;'>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="booking">
            <div class="top">
              <img src="{{ url('public/direngine/images/BMC-Logo.png') }}" alt="">
              <p>Booking Package</p>
              <a href="">3D 2N Bromo Ijen Papuma</a>
            </div>
            <div class="body">
              <ul class="list-unstyled multi-steps">
              <?php 
                $arr = ['Information','Scheduling','Pax & Price','Identity Card','Finish'];
                $page = empty($_GET['page']) ? 1 : $_GET['page'];
                foreach ($arr as $key => $value) {
                    $no = $key+=1;
                    $active = $no==$page ? "class='is-active'" : '';
                    $style  = $no>$page ? "style='color:#808080'" : "";
                    echo "<li $active><a href='?page=$no' $style>$value</a></li>";
                }
              ?>
              </ul>
                @if(isset($_GET['page']))
                    @if($_GET['page']==1)
                        @include('frontend.booking.step1')
                    @elseif($_GET['page']==2)
                        @include('frontend.booking.step2')
                    @elseif($_GET['page']==3)
                        @include('frontend.booking.step3')
                    @elseif($_GET['page']==4)
                        @include('frontend.booking.step4')
                    @elseif($_GET['page']==5)
                        @include('frontend.booking.step5')
                    @endif
                @endif
            </div>
            <div class="bottom">
                <a href="" class="info">Step {{$_GET['page']}} of 5</a>
                <a href="?page=2" class="next"><?php echo $_GET['page']!=5 ? "Next" : "Payment" ?> <span class="ion-ios-arrow-dropright"></span> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="{{ asset('public/direngine/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/frontend.js') }}"></script>    
  <script src="{{ asset('public/direngine/js/dropzone.js') }}"></script>    
  <script>
    var myDropzone = new Dropzone("#myId", { url: 'attach'});
  </script>
  </body>
</html>