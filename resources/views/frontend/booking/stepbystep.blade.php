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
              <a href="">{{$packages->tour_name}}</a>
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
                    <?php 
                    $hotels = DB::table('hotel_when_tour as hw')
                    ->join('detail_itinerary as di','di.id_detail','hw.id_detail_itinerary')
                    ->join('itinerary as i','di.id_itinerary','i.id_itinerary')
                    ->join('room_hotels as rh','hw.id_room_hotel','rh.id_room_hotel')
                    ->join('hotels as h','rh.id_hotel','h.id_hotel')
                    ->join("gallery as g","h.id_gallery","g.id_gallery")
                    ->select("h.hotel_name","i.day","g.img","rh.room_name","rh.gallery","h.overview","h.map")
                    ->groupBy("h.hotel_name","i.day","g.img","rh.room_name","rh.gallery","h.overview","h.map")
                    ->where('i.id_tour',$packages->id_tour)
                    ->get();

                      $param = array(
                        'meeting_point' => $packages->meeting_point,
                        'hotels' => $hotels
                      );
                    ?>
                        @include('frontend.booking.step1', $param)
                    @elseif($_GET['page']==2)
                    <?php 
                    date_default_timezone_set("Asia/Jakarta");
                     $start_date = date("Y-m-d", strtotime("+1 day"));
                      $param = array(
                        "id_tour" => $packages->id_tour,
                        "day" => $packages->day,
                        "start_date" => $start_date
                      );
                    ?>
                        @include('frontend.booking.step2', $param)
                    @elseif($_GET['page']==3)
                    <?php 
                      $sale = $packages->sale*$packages->price/100;
                      $price = $packages->price-$sale;
                      $param = array(
                        "price" => $price
                      );
                    ?>
                        @include('frontend.booking.step3')
                    @elseif($_GET['page']==4)
                        @include('frontend.booking.step4')
                    @elseif($_GET['page']==5)
                    <?php
                    $session = session()->all();
                    $user = DB::table("users")->select("email","lastname")->where("id_user", $session['user']['id_user'])->get();
                    $date = date_create($session['booking'][$session['user']['id_user']]['step2']['start_date']);
                    date_add($date,date_interval_create_from_date_string($packages->day." days"));
                    $end_date = date_format($date,"d F Y");
                    $sale = $packages->sale*$packages->price/100;
                    $price = $packages->price-$sale;
                    $price = number_format($price * $session['booking'][$session['user']['id_user']]['step3']['pax'],0,',','.');
                      $param = array(
                        "email" => $user[0]->email,
                        "firstname" => $session['user']['firstname'],
                        "lastname" => $user[0]->lastname,
                        "pax" => $session['booking'][$session['user']['id_user']]['step3']['pax'],
                        "package" => $packages->tour_name,
                        "type" => $packages->type_name,
                        "day" => $packages->day,
                        "night" => $packages->night,
                        "start_date" => date("d F Y", strtotime($session['booking'][$session['user']['id_user']]['step2']['start_date'])),
                        "end_date" => $end_date,
                        "attach" => $session['booking'][$session['user']['id_user']]['step4']['attach'],
                        "price" => $price,
                      );
                    ?>
                        @include('frontend.booking.step5', $param)
                    @endif
                @endif
            </div>
            <div class="bottom">
                <a href="" class="info">Step {{$_GET['page']}} of 5</a>
                <?php $newPage = $_GET['page']+1 ?>
                <a href="<?php echo $_GET['page']!=5 ? "?page=".$newPage : URL::to("tour-package/booking/success") ?> " class="next page{{$_GET['page']}}"><?php echo $_GET['page']!=5 ? "Next" : "Payment" ?> <span class="ion-ios-arrow-dropright"></span> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="{{ asset('public/direngine/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/direngine/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/frontend.js') }}"></script>
  </body>
</html>