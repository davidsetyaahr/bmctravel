@extends('frontend.common.template')
@section('container')

<div class="hero-wrap js-fullheight" style="background-image: url({{ url('/images/gallery/'.$packages->img) }});">
<div class="overlay js-fullheight"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-9 mt-5 text-center ftco-animate" data-scrollax=" properties: { translateY: '100%' }">
          <h1 class="color-white mt-5 mb-4" data-scrollax="properties: { translateY: '30%'}"><b class="bold">{{$packages->tour_name}}</b> </h1>
          <h4 class="color-white" data-scrollax="properties: { translateY: '30%'}">{{$packages->day}} Days / {{$packages->night}} Nights </h4>
          <div class="inline-package detail mt-4">
            <div class="bottom">
              <div class="left" style="width :100%">
              <?php 
                  $cat = DB::table('itinerary as i')
                  ->join('detail_itinerary as di','i.id_itinerary','di.id_itinerary')
                  ->join('destinations as d','di.id_destination','d.id_destination')
                  ->join('destination_categories as dc','dc.id_category','d.id_category')
                  ->join('gallery as g','dc.id_gallery','g.id_gallery')
                  ->select('dc.category_name','g.img')
                  ->groupBy('dc.category_name')
                  ->groupBy('g.img')
                  ->where('i.id_tour', $packages->id_tour)
                  ->where('di.id_destination','!=','1')
                  ->where('di.id_destination','!=','2')
                  ->where('di.id_destination','!=','3')
                  ->limit(4)
                  ->get();
                  $width = 100/count($cat);
              ?>
              @foreach($cat as $c)
                <div class="img" style="width:{{$width}}%">
                  <img src="{{ url('images/gallery/'.$c->img) }}" alt="">
                  <p>{{$c->category_name}}</p>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <ul class="menu-detail-bottom nav-shadow nav-pills">
    <li class="nav-item">
      <a href="#overview" class="nav-link"><span class="ion-ios-images"></span> Overview</a>
    </li>
    <li class="nav-item">
      <a href="#maping" class="nav-link"><span class="ion-ios-locate"></span> Maping</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#booking"><span class="ion-ios-cart"></span> Booking</a>
    </li>
    <li class="nav-item custom-dropup">
      <a href="#" class="nav-link dropup"><span class="ion-ios-more"></span> Others</a>
      <div class="dropup-content">
        <a href="#itinerary"><span class="ion-ios-calendar"></span> Itinerary</a>
        <a href="#hotels"><span class="ion-ios-bed"></span> Hotels</a>
        <a href="#information"><span class="ion-ios-information-circle"></span> Information</a>
        <a href="#review"><span class="ion-ios-quote"></span> Review</a>
        <a href="#another-package"><span class="ion-ios-globe"></span> Another Package</a>
      </div>
    </li>
  </ul>
  <nav class="menu-detail-package nav-pills" id="myScrollspy">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
        <ul>
          <li class="nav-item">
            <a class="nav-link" href="#overview"><span class="ion-ios-images"></span> Overview</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#maping"><span class="ion-ios-locate"></span> Maping</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#itinerary"><span class="ion-ios-calendar"></span> Itinerary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#hotels"><span class="ion-ios-bed"></span> Hotels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#information"><span class="ion-ios-information-circle"></span> Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#review"><span class="ion-ios-quote"></span> Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#another-package"><span class="ion-ios-globe"></span> Another Package</a>
          </li>
          <li class="nav-item" style="border:none">
            <a class="nav-link" href="#booking"><span class="ion-ios-cart"></span> Booking</a>
          </li>
        </ul>

        </div>
      </div>
      </div>
  </nav>
  <section class="ftco-section mb-5" id="overview">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3><b> OVERVIEW</b></h3>
        <?php 
              $destination = DB::table('itinerary as i')
              ->join('detail_itinerary as di','i.id_itinerary','di.id_itinerary')
              ->join('destinations as d','di.id_destination','d.id_destination')
              ->select('d.destination_name','d.gallery')
              ->groupBy('d.destination_name', 'd.gallery')
              ->where('i.id_tour', $packages->id_tour)
              ->where('di.id_destination','!=','1')
              ->where('di.id_destination','!=','2')
              ->where('di.id_destination','!=','3')
              ->limit(4)
              ->get();
              $countDest = count($destination);
        ?>
        <p class="mt-3">
          @foreach($destination as $key => $dest)
            {{$dest->destination_name}}
            @if($key < $countDest-1)
            /
            @endif
          @endforeach
        </p>
      </div>
    </div>
    <div class="row mt-5 justify-content-center">
    <?php 
      foreach ($destination as $key => $value) {
        $ex = explode(',',$value->gallery);
        $gallery = DB::table('gallery')
        ->select('img')
        ->where('id_gallery',$ex[0])
        ->get();
    ?>
      <div class="col-md-3 mb-3">
        <img src="{{url('images/gallery/'.$gallery[0]->img)}}" class="img-fluid img-overview" alt="">
      </div>
    <?php } ?>
    </div>
    <div class="row mt-5 justify-content-center">
      <div class="col-md-12 text-center">
        <div class="text-overview">{{$packages->overview}}</div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="ftco-section" style="padding : 0px !important" id="maping">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7893.401791841376!2d113.5515929235221!3d-8.43100537574816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd682a6a4b5cd8d%3A0xb9c242f3a09e2d2e!2sPapuma%20Beach!5e0!3m2!1sen!2sid!4v1571045223811!5m2!1sen!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>

<section class="ftco-section bg-light" id="itinerary">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
            <h4 class="bold mb-4 mt-3">Itinerary</h4>
        </div>
      </div>
      <?php
        $itinerary = DB::table('itinerary')
        ->where('id_tour',$packages->id_tour)
        ->orderBy('day','asc')
        ->get();

      ?>
      @foreach($itinerary as $iry)
      <?php 
        $getImg = DB::table('detail_itinerary as di')
        ->join('destinations as d','di.id_destination','d.id_destination')
        ->select('d.gallery')
        ->where('di.id_itinerary',$iry->id_itinerary)
        ->where('di.id_destination','!=','1')
        ->where('di.id_destination','!=','2')
        ->where('di.id_destination','!=','3')
        ->limit(1)
        ->orderBy('di.id_detail','asc')
        ->get();

        if(count($getImg)==0){
          $bgImg = "28131.jpg";
        }
        else{
          $ex = explode(',',$getImg[0]->gallery);
          $getGallery = DB::table('gallery')
          ->select('img')
          ->where('id_gallery', $ex[0])
          ->get();
          $bgImg = $getGallery[0]->img;
        }
?>
      <div class="row justify-content-center mb-5">
        <div class="col-md-10">
          <div class="itinerary">
            <div class="banner" style="background : url({{ url('images/gallery/'.$bgImg) }})">
              <div class="layer">
                <div class="text">
                  <div class="day">
                    Day {{$iry->day}}
                  </div>
                  <div class="title">
                  {{$iry->overview}}
                  </div>
                </div>
              </div>
            </div>
            <div class="body">
            <?php 
              $trip = DB::table('detail_itinerary as di')
              ->select('di.*','d.destination_name','dc.category_name','g.img')
              ->join('destinations as d','di.id_destination','d.id_destination')
              ->join('destination_categories as dc','d.id_category','dc.id_category')
              ->join('gallery as g','dc.id_gallery','g.id_gallery')
              ->orderBy('di.id_detail','asc')
              ->where('id_itinerary',$iry->id_itinerary)
              ->get();
              $tripKe = 1;
              
            ?>
            @foreach($trip as $trp)
            <?php 
              if($trp->id_destination==1){
                $hotel = DB::table('hotel_when_tour as hw')
                ->select('h.hotel_name','rh.room_name')
                ->join('room_hotels as rh','hw.id_room_hotel','rh.id_room_hotel')
                ->join('hotels as h','rh.id_hotel','h.id_hotel')
                ->where('hw.id_detail_itinerary', $trp->id_detail)
                ->get();

                $captDestination = $hotel[0]->hotel_name." - ".$hotel[0]->room_name;
              }
              else{
                $captDestination = $trp->destination_name;
              }
            ?>
              <div class="row row-border">
                <div class="col-md-2 p-0">
                  <div class="trip">
                    <div class="text">
                      Trip <p>{{$tripKe}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                  <div class="schedule">
                    <div class="time">
                      <span><span class="dest">{{$captDestination}}</span> <span class="float-right">{{date('H:i', strtotime($trp->time_start))}} - {{date('H:i', strtotime($trp->time_end))}}</span></span>
                    </div>
                    <div class="desc">
                    {{$trp->caption}}
                    </div>
                  </div>
                </div>
                <div class="col-md-3 p-0">
                  <div class="others">
                    <div class="tour-style">
                      <img src="{{ url('images/gallery/'.$trp->img) }}" alt="">
                      <p>{{$trp->category_name}}</p>
                      <div class="destinations">
                          <?php 
                            $activities = DB::table('destination_activities as da')
                            ->join('trip_activities as ta','da.id_activities','ta.id_activities')
                            ->select('ta.activities')
                            ->where('da.id_destination',$trp->id_destination)
                            ->limit(2)
                            ->get();

                            if($trp->id_destination==1 || $trp->id_destination==2 || $trp->id_destination==3){
                              echo "<span>#".$trp->destination_name."</span>";
                            }
                            else{
                          ?>
                          @foreach($activities as $act)
                            <span>#{{$act->activities}}</span>
                          @endforeach
                         <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php $tripKe++ ?>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <div class="row justify-content-center mb-5" id="hotels">
        <div class="col-md-10">
          <h4 class="bold mb-4 mt-3">Hotels</h4>
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
            
          ?>
          @foreach($hotels as $h)
          <div class="hotel">
            <div class="row">
              <div class="col-md-12">
                <div class="hotel-name">
                  {{$h->hotel_name}}
                </div>
              </div>
              <div class="col-md-4">
                <div class="images">
                  <div class="img-top">
                    <img src="{{ url('images/gallery/'.$h->img) }}" alt="" class="img-fluid">
                  </div>
                  <div class="img-bottom">
                    <?php 
                      $img = explode(",",$h->gallery);
                      foreach ($img as $img) {
                        $imgRoom = DB::table("gallery")
                        ->select("img")
                        ->where("id_gallery",$img)
                        ->get();
                    ?>
                    <div class="img">
                      <img src="{{ url('images/gallery/'.$imgRoom[0]->img) }}" alt="" class="img-fluid">
                    </div>
                    <?php
                      }
                    ?>
                  </div>
                  <div class="desc">
                      <div class="website">
                        <a href="">View Website</a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                  <div class="hotel-information">
                    <h6 class="bold">Day {{$h->day}} &nbsp; <span class="color-green"><small> {{$h->room_name}}</small></span> <span class="float-right color-orange"><small>Bondowoso - East Java</small></span></h6>
                    <p>{{$h->overview}}</p>
                    <hr>
                    <iframe src="{{$h->map}}" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                    
                  </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="row justify-content-center" id="information">
          <div class="col-md-10">
            <h4 class="bold mb-4 mt-3">Informations</h4>
            <div class="box-white">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#include">Package Include</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#exclude">Package Exclude</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#others">What should i pack?</a>
                </li>
              </ul>
              
              <!-- Tab panes -->
              <div class="tab-content mt-3">
                <div class="tab-pane container active" id="include">
                  <ul>
                    @foreach($informations['include'] as $inc)
                    <li>{{$inc->text}}</li>
                    @endforeach
                  </ul>
                </div>
                <div class="tab-pane container fade" id="exclude">
                <ul>
                    @foreach($informations['exclude'] as $ex)
                    <li>{{$ex->text}}</li>
                    @endforeach
                  </ul>
                </div>
                <div class="tab-pane container fade" id="others">
                <ul>
                    @foreach($informations['pack'] as $pack)
                    <li>{{$pack->text}}</li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</section>
<section class="ftco-section" id="review">
  <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <h4 class="bold">Reviews</h4>
          <h6>Based on <span class="bold">{{count($reviews)}}</span> reviews</h6>
          <div class="review-info mt-4">
            <div class="rated">
              <div class="rounded-score">
                  <div class="score">{{ceil($average)}}</div>
              </div>
                <?php 
                  $arr = array("Poor","Average","Satisying","Very Good","Fantastic");
                ?>
              <div class="value"><?php echo $arr[ceil($average)-1] ?></div>
            </div>
            <div class="percentage">
              <div class="title">Fantastic</div>
              <div class="progress"><div class="progress-rate" style="width : {{$rev['fantastic']}}%"></div></div>
              <div class="count">{{$progress['fantastic'][0]->ttl}}</div>
            </div>
            <div class="percentage">
              <div class="title">Very Good</div>
              <div class="progress"><div class="progress-rate" style="width : {{$rev['verygood']}}%"></div></div>
              <div class="count">{{$progress['verygood'][0]->ttl}}</div>
            </div>
            <div class="percentage">
              <div class="title">Satisfying</div>
              <div class="progress"><div class="progress-rate" style="width : {{$rev['satisfying']}}%"></div></div>
              <div class="count">{{$progress['satisfying'][0]->ttl}}</div>
            </div>
            <div class="percentage">
              <div class="title">Average</div>
              <div class="progress"><div class="progress-rate" style="width : {{$rev['average']}}%"></div></div>
              <div class="count">{{$progress['average'][0]->ttl}}</div>
            </div>
            <div class="percentage">
              <div class="title">Poor</div>
              <div class="progress"><div class="progress-rate" style="width : {{$rev['poor']}}%"></div></div>
              <div class="count">{{$progress['poor'][0]->ttl}}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-md-10 reviews-row">
           @foreach($reviews as $r)
           <div class="review-content">
             <div class="top">
               <div class="avatar">
                 <img src="{{url('images/avatar/'.$r->avatar)}}" alt="">
               </div>
               <div class="desc">
                 <div class="name">
                   {{$r->firstname}} {{$r->lastname}}
                 </div>
                 <div class="datetime">
                   {{date("d M Y, H:i", strtotime($r->datetime))}}
                </div>
                </div>
                <div class="score">
                  Rated <span class="score-blue"> {{$r->rate}}.0 </span>/ 5
                </div>
             </div>
             <div class="bottom">
               {{$r->comment}}
             </div>
            </div>
            @endforeach
            <?php 
              if(!empty(session()->all()['user'])){
                $user = session()->all()['user'];
                $cek = DB::table('bookings as b')
                ->join("users as u","b.id_user","u.id_user")
                ->select(array('u.avatar',DB::raw('count(b.id_booking) as ttl')))
                ->where('b.id_user',$user['id_user'])
                ->where('b.id_tour',$packages->id_tour)
                ->where('b.status','2')
                ->groupBy('b.id_booking','u.avatar')
                ->get();
                if($cek[0]->ttl==1)
                {
            ?>
           <div class="review-content">
             <div class="top">
               <div class="avatar">
                 <img src="{{url('images/avatar/'.$cek[0]->avatar)}}" alt="">
               </div>
               <div class="desc">
                 <div class="name">
                   {{$user['firstname']}} {{$user['lastname']}}
                 </div>
                 <div class="datetime">
                   {{date("d M Y")}}
                 </div>
                </div>
                <div class="score">
                  Rated <span class="score-blue comment"> 0 </span>/ 5
                </div>
             </div>
             <div class="bottom">
               <label style="margin-bottom:0px" for="">Rating (Give us coffe!)</label>
               <div class="choose-coffe" data-click="">
                 <?php 
                  for($i=1;$i<=5;$i++){
                    echo "<span class='flaticon flaticon-coffee-cup' data-rate='".$i."'></span>";
                  }
                 ?>
               </div>
               <form action="{{url('tour-package/rate')}}" method="post">
               @csrf
                 <input type="hidden" name="rate" id="hiddenrate">
                 <input type="hidden" name="id_tour" value="{{$packages->id_tour}}">
                 <br>
                 <label for="">Comment</label>
                 <textarea id="" rows="5" class="form-control custom normal" style="height:auto !important" name="comment"></textarea>
                 <br>
                 <input type="reset" class="btn btn-default">
                 <input type="submit" class="btn btn-warning">
                </form>
             </div>
            </div>
            <?php } } ?>
        </div>
      </div>
  </div>
</section>
<section class="ftco-section" id="another-package">
  <div class="container">
  <div class="row justify-content-center">
          <div class="col-md-10">
          <h4 class="bold mt-4 mb-4">Another Same Package</h4>
              <div class="row mt-4">
                @foreach($another_packages as $ap)
                  <div class="col-md-4 mb-3">
                    <div class="package1">
                      <div class="relative hidden">
                        <div class="layer transition"></div>
                        <div class="sticky-note">
                          <span>{{$ap->type_name}}</span>
                        </div>
                        <img src="{{url('images/gallery/'.$ap->img)}}" alt="" class="img-fluid transition">
                        <?php 
                        $name = strtolower(str_replace(' ','-',$ap->tour_name));
                      ?>
                        <a href="{{ url('tour-package/detail-package/'.$ap->id_tour.'/'.$name) }}" class="view-link transition">View Package</a>
                      </div>
                      <div class="text-bottom mt-2">
                        <div class="title">{{$ap->tour_name}}</div>
                        <div class="price-tour"><span><small>start from</small>{{number_format($ap->price,0,',','.')}}</span></div>
                      </div>
                    </div>
                  </div>
                    @endforeach
              </div>
          </div>
      </div>
  </div>
</section>
<section class="ftco-section" id="booking">
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="border radius p-5 text-center">
                <div class="row">
                  <div class="col-md-6 b-right">
                  <div class="text-confirm mb-4">
                      Let's share this package to everyone
                    </div>
                    <div class="share">
                      <div class="item">
                        <a href=""> <img src="{{ url('public/images/common/facebook.png') }}" alt=""> Facebook</a>
                      </div>
                      <div class="item">
                        <a href=""> <img src="{{ url('public/images/common/whatsapp.png') }}" alt=""> Whatsapp</a>
                      </div>
                      <div class="item">
                        <a href=""> <img src="{{ url('public/images/common/gmail.png') }}" alt="">  Email</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="text-confirm mb-4">
                      Do you want to book this awesome package?
                    </div>
                      <a href="" class="btn btn-outline-primary f14 mb-3">Another package</a>
                      &nbsp;
                      <?php 
                        $name = strtolower(str_replace(' ','-',$packages->tour_name));
                      ?>
                      <a href="{{url('tour-package/booking/1/'.$name.'?page=1')}}" class="btn btn-primary f14 mb-3">Book this package</a>
                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</section>
<!--div id="googleMap" style="width:100%;height:380px;"></div-->
<script>
var body = document.getElementsByTagName("body")[0]
body.setAttribute("data-spy","scroll")
body.setAttribute("data-target","#myScrollspy")
body.setAttribute("data-offset","150")
</script>
@endsection
<!--script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYguqZV2siz5aCrT9gsddcLOZ7NZscK0E&callback=initMap" type="text/javascript"></script>
<script>
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-8.5830695,116.3202515),
    zoom:9,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({
      position: new google.maps.LatLng(-8.5830695,116.3202515),
      map: peta
  });

}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script-->

