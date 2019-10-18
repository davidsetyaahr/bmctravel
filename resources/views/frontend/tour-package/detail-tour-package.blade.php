@extends('frontend.common.template')
@section('container')

<div class="hero-wrap js-fullheight" style="background-image: url({{ url('direngine/images/bg_2.jpg') }});">
<div class="overlay js-fullheight"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-9 mt-5 text-center ftco-animate" data-scrollax=" properties: { translateY: '100%' }">
          <h1 class="color-white mt-5 mb-4" data-scrollax="properties: { translateY: '30%'}"><b>Wonderfull Bromo Ijen Papuma</b> </h1>
          <h6 class="color-white badge-green" data-scrollax="properties: { translateY: '30%'}">3 Days 2 Nights </h6>
          <div class="inline-package detail mt-4">
            <div class="bottom">
              <div class="left" style="width :100%">
                <div class="img">
                  <img src="{{ url('images/gallery/rocks.png') }}" alt="">
                  <p>Mountain</p>
                </div>
                <div class="img">
                  <img src="{{ url('images/gallery/sunrise.png') }}" alt="">
                  <p>Beach</p>
                </div>
                <div class="img">
                  <img src="{{ url('images/gallery/waterfall.png') }}" alt="">
                  <p>Waterfall</p>
                </div>
                <div class="img">
                  <img src="{{ url('images/gallery/office.png') }}" alt="">
                  <p>City</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-sm menu-detail-package nav-pills" id="myScrollspy">
    <div class="container">
      <ul class="navbar-nav ml-auto">
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
            <a class="nav-link" href="#"><span class="ion-ios-bed"></span> Hotels</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="ion-ios-information-circle"></span> Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="ion-ios-quote"></span> Review</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="ion-ios-globe"></span> Another Package</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="ion-ios-cart"></span> Booking</a>
          </li>
        </ul>
      </div>
  </nav>
  <section class="ftco-section mb-5" id="overview">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h3><b> OVERVIEW</b></h3>
        <p class="mt-3">Bali / Malang / Bondowoso</p>
      </div>
    </div>
    <div class="row mt-5 justify-content-center">
      <div class="col-md-3">
        <img src="{{url('direngine/images/destinations/tabuhan.jpg')}}" class="img-fluid img-overview" alt="">
      </div>
      <div class="col-md-3">
        <img src="{{url('direngine/images/destinations/merbabu.jpg')}}" class="img-fluid img-overview" alt="">
      </div>
      <div class="col-md-3">
        <img src="{{url('direngine/images/destinations/menjangan.jpg')}}" class="img-fluid img-overview" alt="">
      </div>
    </div>
    <div class="row mt-5 justify-content-center">
      <div class="col-md-10 text-center">
        <div class="text-overview">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio asperiores sapiente eius dolor consequuntur itaque impedit? Laboriosam repudiandae nam quisquam quod possimus, officiis velit sunt quam eum similique quibusdam! Ab.</div>
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
      <div class="row justify-content-center mb-5">
        <div class="col-md-10">
          <div class="itinerary">
            <div class="banner" style="background : url({{ url('images/gallery/banner1.png') }})">
              <div class="layer">
                <div class="text">
                  <div class="day">
                    Day 1
                  </div>
                  <div class="title">
                    Let's Start Trip to Bromo
                  </div>
                </div>
              </div>
            </div>
            <div class="body">
              <div class="row row-border">
                <div class="col-md-2 p-0">
                  <div class="trip">
                    <div class="text">
                      Trip <p>1</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                  <div class="schedule">
                    <div class="time">
                      <span><span class="dest">Mount Bromo</span> <span class="float-right">07:00 - 12:00</span></span>
                    </div>
                    <div class="desc">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem ducimus illum ut repudiandae cupiditate, fugiat quia culpa autem aut laudantium inventore a adipisci blanditiis odit molestiae modi officiis dolor odio.
                    </div>
                  </div>
                </div>
                <div class="col-md-3 p-0">
                  <div class="others">
                    <div class="tour-style">
                    <div class="carousel-tour-style owl-carousel">
    		              <div class="item">
                        <center>
                          <img src="{{ url('images/gallery/boot.png') }}" alt="">
                        </center>
                        <p>Hiking</p>
                      </div>
                      <div class="item">
                        <center>
                          <img src="{{ url('images/gallery/honey-moon.png') }}" alt="">
                        </center>
                          <p>Honey Moon</p>
                    </div>
		            </div>
                      <div class="destinations">
                          <span>#Bromo</span> <span>#Mountain</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-border">
                <div class="col-md-2 p-0">
                  <div class="trip">
                    <div class="text">
                      Trip <p>3</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                  <div class="schedule">
                    <div class="time">
                      <span><span class="dest">Mount Ijen</span> <span class="float-right">07:00 - 12:00</span></span>
                    </div>
                    <div class="desc">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem ducimus illum ut repudiandae cupiditate, fugiat quia culpa autem aut laudantium inventore a adipisci blanditiis odit molestiae modi officiis dolor odio.
                    </div>
                  </div>
                </div>
                <div class="col-md-3 p-0">
                  <div class="others">
                    <div class="tour-style">
                      <img src="{{ url('images/gallery/boot.png') }}" alt="">
                      <p>Hiking</p>
                      <div class="destinations">
                          <span>#Bromo</span> <span>#Mountain</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-border">
                <div class="col-md-2 p-0">
                  <div class="trip">
                    <div class="text">
                      Trip <p>3</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                  <div class="schedule">
                    <div class="time">
                      <span><span class="dest">Tabuhan Island</span> <span class="float-right">07:00 - 12:00</span></span>
                    </div>
                    <div class="desc">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem ducimus illum ut repudiandae cupiditate, fugiat quia culpa autem aut laudantium inventore a adipisci blanditiis odit molestiae modi officiis dolor odio.
                    </div>
                  </div>
                </div>
                <div class="col-md-3 p-0">
                  <div class="others">
                    <div class="tour-style">
                      <img src="{{ url('images/gallery/honey-moon.png') }}" alt="">
                      <p>Honey Moon</p>
                      <div class="destinations">
                          <span>#Bromo</span> <span>#Mountain</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mb-5">
        <div class="col-md-10">
          <div class="itinerary">
            <div class="banner" style="background : url({{ url('images/gallery/banner1.png') }})">
              <div class="layer">
                <div class="text">
                  <div class="day">
                    Day 1
                  </div>
                  <div class="title">
                    Let's Start Trip to Bromo
                  </div>
                </div>
              </div>
            </div>
            <div class="body">
              <div class="row row-border">
                <div class="col-md-2 p-0">
                  <div class="trip">
                    <div class="text">
                      Trip <p>1</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                  <div class="schedule">
                    <div class="time">
                      <span><span class="dest">Mount Bromo</span> <span class="float-right">07:00 - 12:00</span></span>
                    </div>
                    <div class="desc">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem ducimus illum ut repudiandae cupiditate, fugiat quia culpa autem aut laudantium inventore a adipisci blanditiis odit molestiae modi officiis dolor odio.
                    </div>
                  </div>
                </div>
                <div class="col-md-3 p-0">
                  <div class="others">
                    <div class="tour-style">
                      <img src="{{ url('images/gallery/boot.png') }}" alt="">
                      <p>Hiking</p>
                      <div class="destinations">
                          <span>#Bromo</span> <span>#Mountain</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-border">
                <div class="col-md-2 p-0">
                  <div class="trip">
                    <div class="text">
                      Trip <p>3</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                  <div class="schedule">
                    <div class="time">
                      <span><span class="dest">Mount Ijen</span> <span class="float-right">07:00 - 12:00</span></span>
                    </div>
                    <div class="desc">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem ducimus illum ut repudiandae cupiditate, fugiat quia culpa autem aut laudantium inventore a adipisci blanditiis odit molestiae modi officiis dolor odio.
                    </div>
                  </div>
                </div>
                <div class="col-md-3 p-0">
                  <div class="others">
                    <div class="tour-style">
                      <img src="{{ url('images/gallery/boot.png') }}" alt="">
                      <p>Hiking</p>
                      <div class="destinations">
                          <span>#Bromo</span> <span>#Mountain</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row row-border">
                <div class="col-md-2 p-0">
                  <div class="trip">
                    <div class="text">
                      Trip <p>3</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-7 p-0">
                  <div class="schedule">
                    <div class="time">
                      <span><span class="dest">Tabuhan Island</span> <span class="float-right">07:00 - 12:00</span></span>
                    </div>
                    <div class="desc">
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem ducimus illum ut repudiandae cupiditate, fugiat quia culpa autem aut laudantium inventore a adipisci blanditiis odit molestiae modi officiis dolor odio.
                    </div>
                  </div>
                </div>
                <div class="col-md-3 p-0">
                  <div class="others">
                    <div class="tour-style">
                      <img src="{{ url('images/gallery/honey-moon.png') }}" alt="">
                      <p>Honey Moon</p>
                      <div class="destinations">
                          <span>#Bromo</span> <span>#Mountain</span>
                      </div>
                    </div>
                  </div>
                </div>
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

