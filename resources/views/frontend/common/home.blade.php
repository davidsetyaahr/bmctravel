@extends('frontend/common/template')
@section('container')
<!-- <script>
 var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid white }";
  document.body.appendChild(css);
};
 </script>
 -->	<video autoplay muted loop id="myVideo">
	<source src="public/direngine/js/bideo.js-master/Wonderful Indonesia - Adventure.mp4" type="video/mp4">
	Your browser does not support HTML5 video.
	</video>
	<div class="overlay-video">
		<div class="container top">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="title">
<!-- 					<h1>Welcome to
						<br>
						<span
						class="txt-rotate"
						data-period="1000"
						data-rotate='[ "BMC Travel Service", "One Stop Travel Solution"]'></span>
					</h1>
 -->					
					<h1>Baratha Travel Service</h1>
				</div>
					<h5 style="opacity:.8" class="ls-1 mb-3 color-white ftco-animation">One Stop Travel Solution</h5>
					<a href="" class="btn btn-primary ftco-animation btn-tour-finder">Let's Find The Destination <span class="span ion-ios-search"></span> </a>
				</div>
			</div>
		</div>
	</div>
	<div class="tour-finder">
	    <span class="ion-ios-close close-finder"></span>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="card finder">
						<div class="card-header text-center">
							Tour Finder
						</div>
						<div class="card-body">
							<form action="tour-package" method="get">
								<input type="hidden" name="tourfinder">
								<div class="row">
									<div class="col-md-3">
										<label for="">Category</label>
									<select name="id_category" class="form-control" id="">
										<option value="">--Option---</option>
										@foreach($tour_categories as $data)
											<option value="{{$data->id_category}}">{{$data->category_name}}</option>
											@endforeach
									</select>
								</div>
								<div class="col-md-3">
									<label for="">Durations</label>
									<select name="id_duration" class="form-control" id="">
										<option value="">--Option---</option>
										@foreach($tour_durations as $data)
										<option value="{{$data->id_duration}}">{{$data->day}} Days {{$data->night}} Nights</option>
										@endforeach
									</select>
								</div>
								<div class="col-md-3">
									<label for="">Destination</label>
									<select name="id_destination" class="form-control" id="">
										<option value="">--Option---</option>
										@foreach($destinations as $data)
										<option value="{{$data->id_destination}}">{{$data->destination_name}}</option>
										@endforeach
									</select>
								</div>
								<div class="col-md-3">
									<label for="">Budget</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">IDR</span>
										</div>
										<input type="text" name="budget" class="form-control" placeholder="Budget per person">
									</div>									
								</div>
								<div class="col-md-12 text-center mt-4">
									<button class="btn btn-primary" type="submit">
										<span class="ion-ios-search"></span>
										Find tour
									</button>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center heading-section ftco-animate" style="margin-top:100vh">
						<h2 class="mb-4 pb-3"><strong>Sekapur</strong> Sirih</h2>
						<p class="ls-1">Selamat datang di BMC Travel Service. Traveling saat ini telah menjadi kebutuhan pokok disamping kebutuhan akan sandang, pangan, dan papan. Kebutuhan akan merefreshing pikiran karena penat dengan aktifitas pekerjaan dan kehidupan sehari-hari mendorong orang-orang untuk melakukan traveling untuk menyegarkan kembali pikiran. Perkembangan golongan menengah juga menjadi pendorong industri tour dan travel merespon permintaan pasar akan layanagn tour dan travel yang semakin meningkat. Selayaknya usaha di bidang jasa lainnya, BMC Travel Service selaku perusahaan di bidang tour dan travel akan selalu memberikan pelayanan yang maksimal kepada tamu-tamu kami. Peningkatan kualitas dan kuantitas layanan senantiasa kami jaga sebaik mungkin demi kepuasan tamu. Kami dengan setulus hati melayani anda, memberikan kepuasan akan layanan wisata yang terbaik yang dapat kami lakukan. Terimakasih telah memilih BMC Travel Service sebagai mitra perjalanan wisata anda.</p>
					<p>Salam Hangat</p>
					<h1 style="font-family: 'Sacramento', cursive;">Fajar N Eristyawan</h1>
					<p class="bold">CEO BMC Travel Service</p>
				</div>
			</div>
		</div>
    </section>
 
    <section class="ftco-section pb-0">
    	<div class="container">
    		<div class="row">
				<div class="col-md-10 heading-section ftco-animate">
					<h4 class="mb-4"><strong>Featured</strong> Destination</h4>
				</div>
				<div class="col-md-2">
					<a href="{{url('destinations')}}" class="btn border-grey">Explore More <span class="ion-md-arrow-dropright"></span> </a>
				</div>
			</div>
		</div>
		<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destinationtext owl-carousel ftco-animate">
						@foreach ($type as $item)
						<div class="item">
							<div class="relative">
								<img src="{{url('images/gallery/'.$item->img)}}" alt="" class="img-fluid">
								<div class="box">
									<h6>{{$item->type_name}}</h6>
								</div>
							</div>
						</div>
						@endforeach
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section pb-0">
    	<div class="container">
			<div class="row">
				<div class="col-md-10 heading-section ftco-animate">
					<h4 class="mb-4"><strong>Top</strong> Tour Packages</h4>
				</div>
				<div class="col-md-2">
					<a href="{{ url('tour-package') }}" class="btn border-grey">Explore More  <span class="ion-md-arrow-dropright"></span></a>
				</div>
	        </div>
 		</div>
    	<div class="container">
    		<div class="row ftco-animate">
				@foreach ($tour_package as $item)
				<div class="col-md-3">
					<div class="package1 mb-4">
						<div class="relative hidden">
							<div class="layer transition"></div>
							<div class="sticky-note">
								<span>{{$item->category_name}}</span>
							</div>
							<img src="{{url('images/gallery/'.$item->img)}}" alt="" class="img-fluid transition">
							<?php 
                      	  $name = strtolower(str_replace(' ','-',$item->tour_name));
                      ?>
                      <a href="{{ url('tour-package/detail-package/'.$item->id_tour.'/'.$name) }}">
						<div class="view-link transition">View Package</div>
					  </a>
						</div>
						<div class="text-bottom mt-2">
							<div class="title">{{$item->day}}D {{$item->night}}N {{$item->tour_name}}</div>
							<div class="price-tour"><span><small>start from</small>@currency($item->price) </span></div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
    	</div>
    </section>

<!-- 	<section class="ftco-section ftco-animate pb-0">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6 mb-5">
					<h5 class="color-red">Some fun facts</h5>
					<div class="row mt-5">
						<div class="col-4">
							<img src="{{ asset('public/images/gallery/jeep.png') }}" alt="">
							<h6 class="mt-3">120</h6>
							Travel Packages
						</div>
						<div class="col-4">
							<img src="{{ asset('public/images/gallery/tourist.png') }}" alt="">
							<h6 class="mt-3">100+</h6>
							Happy Clients
						</div>
						<div class="col-4">
							<img src="{{ asset('public/images/gallery/smartphone.png') }}" alt="">
							<h6 class="mt-3">30</h6>
							Destinations
						</div>
					</div>
				</div>
				<div class="col-md-6" style="border-left : 1px solid #ddd">
					<h5 class="color-red">Easy, Fun, Secure</h5>
					<div class="row mt-5">
						<div class="col-4">
							<img src="{{ asset('public/images/common/tourist.png') }}" alt="">
							<h6 class="mt-3">Friendly Staff</h6>
						</div>
						<div class="col-4">
							<img src="{{ asset('public/images/common/flag.png') }}" alt="">
							<h6 class="mt-3">
								The High Level Of Service
							</h6>
						</div>
						<div class="col-4">
							<img src="{{ asset('public/images/common/journal.png') }}" alt="">
							<h6 class="mt-3">Legitimacy</h6>
						</div>
					</div>
				</div>
			</div>
			<br>
			<hr>
		</div>
	</section>
 -->
	<section class="ftco-section ftco-animate bg-light">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center">
					<h4 class="mb-4 pb-3"><strong>Browse</strong> package by categories</h4>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/aEF-8UIhgVw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>				</div>
				<div class="col-md-6">
					<div class="row">
				@foreach ($destination_categories as $item)
				<div class="col-md-3 col-6 mb-4">
					<div class="border text-center p-3" style="border:2px solid white !important">
						<img src="{{url('images/gallery/'.$item->img)}}" alt="">
						<h6 class="mt-3">{{$item->category_name}}</h6>
					</div>
				</div>
				@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-section testimony-section parallax">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-6 heading-section ftco-animate">
            <h4 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h4>
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel">
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(public/direngine/images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		                    <p class="name">Dennis Green</p>
		                    <span class="position">Guest from italy</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(public/direngine/images/person_2.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		                    <p class="name">Dennis Green</p>
		                    <span class="position">Guest from London</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(public/direngine/images/person_3.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text ml-md-4">
		                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		                    <p class="name">Dennis Green</p>
		                    <span class="position">Guest from Philippines</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		    </div>
          </div>
		  <div class="col-md-6">
				<img src="{{url('public/images/common/banner-login.jpg')}}" alt="" class="img-fluid rounded">
		  </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-start mb-3 pb-3">
          <div class="col-md-10 heading-section ftco-animate">
            <h4><strong>Tips</strong> &amp; Articles</h4>
          </div>
		  <div class="col-md-2">
			<a href="" class="btn border-grey">Explore More <span class="ion-md-arrow-dropright"></span> </a>
			</div>
        </div>
        <div class="row d-flex">
		@foreach ($travel_tips as $item)
		<div class="col-md-4 mb-3">
			<div class="travel-tips">
				<div class="relative">
					<div class="layer transition"></div>
					<img src="{{url('images/gallery/'.$item->img)}}" alt="" class="img-fluid transition">
				</div>
				<div class="bottom">
					<div class="title">{{$item->title}}</div>
					<div class="link">
						<a href="#" class="by">By: {{$item->firstname}}</a>
						<a href="{{url('travel-tips/detail-travel/'.$item->permalink)}}" class="float-right">Read More</a>
					</div>
				</div>
			</div>
		</div>
		@endforeach
        </div>
      </div>
    </section>
		
		<section class="ftco-section bg-light">
      <div class="d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit btn-danger" style="border:0px">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection