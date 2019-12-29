@extends('frontend/common/template')
@section('container')
<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
<script>
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
	<video autoplay muted loop id="myVideo">
	<source src="public/direngine/js/bideo.js-master/Wonderful Indonesia - Adventure.mp4" type="video/mp4">
	Your browser does not support HTML5 video.
	</video>
	<div class="overlay-video">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="title">
					<h1>Welcome to
						<br>
						<span
						class="txt-rotate"
						data-period="1000"
						data-rotate='[ "BMC Travel Service", "One Stop Travel Solution"]'></span>
					</h1>
					</div>
					<h5 class="color-white ftco-animation">Where do you want to go?</h5>
					<a href="" class="btn ftco-animation">Let's Find The Destination <span class="span ion-ios-arrow-down"></span> </a>
				</div>
			</div>
		</div>
	</div>
 <section class="ftco-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center heading-section ftco-animate" style="margin-top:100vh">
					<h2 class="mb-4 pb-3"><strong>Sekapur</strong> Sirih</h2>
					<p>Selamat datang di BMC Travel Service. Traveling saat ini telah menjadi kebutuhan pokok disamping kebutuhan akan sandang, pangan, dan papan. Kebutuhan akan merefreshing pikiran karena penat dengan aktifitas pekerjaan dan kehidupan sehari-hari mendorong orang-orang untuk melakukan traveling untuk menyegarkan kembali pikiran. Perkembangan golongan menengah juga menjadi pendorong industri tour dan travel merespon permintaan pasar akan layanagn tour dan travel yang semakin meningkat. Selayaknya usaha di bidang jasa lainnya, BMC Travel Service selaku perusahaan di bidang tour dan travel akan selalu memberikan pelayanan yang maksimal kepada tamu-tamu kami. Peningkatan kualitas dan kuantitas layanan senantiasa kami jaga sebaik mungkin demi kepuasan tamu. Kami dengan setulus hati melayani anda, memberikan kepuasan akan layanan wisata yang terbaik yang dapat kami lakukan. Terimakasih telah memilih BMC Travel Service sebagai mitra perjalanan wisata anda.</p>
					<p>Salam Hangat</p>
					<h1 style="font-family: 'Sacramento', cursive;">Fajar N Eristyawan</h1>
					<b>CEO BMC Travel Service</b>
				</div>
			</div>
		</div>
    </section>
 
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
				<div class="col-md-10 heading-section ftco-animate">
					<h4 class="mb-4"><strong>Featured</strong> Destination</h4>
				</div>
				<div class="col-md-2">
					<a href="http://127.0.0.1:8000/destinations" class="btn border-grey">Explore More <span class="ion-md-arrow-dropright"></span> </a>
				</div>
			</div>
		</div>
		<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destinationtext owl-carousel ftco-animate">
						<div class="item">
							<div class="relative">
								<img src="public/direngine/images/destinations/kawah-wurung.png" alt="" class="img-fluid">
								<div class="box">
									<h6>Explore East Java</h6>
								</div>
							</div>
						</div>
						<div class="item">
						<div class="relative">
							<img src="public/direngine/images/destinations/ijen.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Explore Bondowoso</h6>
							</div>
							</div>
						</div>
						<div class="item">
						<div class="relative">
							<img src="public/direngine/images/destinations/merbabu.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Mountain Vibes</h6>
							</div>
							</div>
						</div>
						<div class="item">
						<div class="relative">
							<img src="public/direngine/images/destinations/bali.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Beach Vibes</h6>
							</div>
							</div>
						</div>
						<div class="item">
						<div class="relative">
							<img src="public/direngine/images/destinations/tabuhan.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Menjangan & Tabuhan Island</h6>
							</div>
							</div>
						</div>
						<div class="item">
						<div class="relative">
							<img src="public/direngine/images/destinations/bromo.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Bromo Midnight</h6>
							</div>
							</div>
						</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
			<div class="row">
				<div class="col-md-10 heading-section ftco-animate">
					<h4 class="mb-4"><strong>Top</strong> Tour Packages</h4>
				</div>
				<div class="col-md-2">
					<a href="http://127.0.0.1:8000/tour-package" class="btn border-grey">Explore More  <span class="ion-md-arrow-dropright"></span></a>
				</div>
	        </div>
<!-- 			<div class="row mt-3">
				<div class="col-md-12">
					<ul class="progressbar">
						<li>1 to 3 days</li>
						<li>4 to 6 days</li>
						<li>7 to 9 days</li>
						<li>10 to 12 days</li>
					  </ul>
				</div>
			</div>    		
 -->    	</div>
    	<div class="container">
    		<div class="row mt-5 ftco-animate">
				<div class="col-md-3">
					<div class="package1 mb-4">
						<div class="relative hidden">
							<div class="layer transition"></div>
							<div class="sticky-note">
								<span>Beach Vibes</span>
							</div>
							<img src="public/direngine/images/destinations/tabuhan.jpg" alt="" class="img-fluid transition">
							<div class="view-link transition">View Package</div>
						</div>
						<div class="text-bottom mt-2">
							<div class="title">3D 2N Menjangan Island</div>
							<div class="price-tour"><span><small>start from</small>1.000.000 </span></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="package1 mb-4">
						<div class="relative hidden">
							<div class="layer transition"></div>
							<div class="sticky-note">
								<span>Explore Bondowoso</span>
							</div>
							<img src="public/direngine/images/destinations/ijen.jpg" alt="" class="img-fluid transition">
							<div class="view-link transition">View Package</div>
						</div>
						<div class="text-bottom mt-2">
							<div class="title">3D 2N Bondowoso</div>
							<div class="price-tour"><span><small>start from</small>1.000.000 </span></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="package1 mb-4">
						<div class="relative hidden">
							<div class="layer transition"></div>
							<div class="sticky-note">
								<span>Mountain Vibes</span>
							</div>
							<img src="public/direngine/images/destinations/merbabu.jpg" alt="" class="img-fluid transition">
							<div class="view-link transition">View Package</div>
						</div>
						<div class="text-bottom mt-2">
							<div class="title">3D 2N Menjangan Island</div>
							<div class="price-tour"><span><small>start from</small>1.000.000 </span></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="package1 mb-4">
						<div class="relative hidden">
							<div class="layer transition"></div>
							<div class="sticky-note">
								<span>Beach Vibes</span>
							</div>
							<img src="public/direngine/images/destinations/tabuhan.jpg" alt="" class="img-fluid transition">
							<div class="view-link transition">View Package</div>
						</div>
						<div class="text-bottom mt-2">
							<div class="title">3D 2N Menjangan Island</div>
							<div class="price-tour"><span><small>start from</small>1.000.000 </span></div>
						</div>
					</div>
				</div>
			</div>
    	</div>
    </section>

	<section class="ftco-section ftco-animate">
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

	<section class="ftco-section ftco-animate">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center">
					<h4 class="mb-4 pb-3"><strong>Browse</strong> package by categories</h4>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-3 col-6 mb-4">
					<div class="border text-center p-3">
						<img src="{{ asset('public/images/gallery/rocks.png') }}" alt="">
						<h6 class="mt-3">Mountain</h6>
					</div>
				</div>
				<div class="col-md-3 col-6 mb-4">
					<div class="border text-center p-3">
						<img src="{{ asset('public/images/gallery/sunrise.png') }}" alt="">
						<h6 class="mt-3">Beach</h6>
					</div>
				</div>
				<div class="col-md-3 col-6 mb-4">
					<div class="border text-center p-3">
						<img src="{{ asset('public/images/gallery/waterfall.png') }}" alt="">
						<h6 class="mt-3">Waterfall</h6>
					</div>
				</div>
				<div class="col-md-3 col-6 mb-4">
					<div class="border text-center p-3">
						<img src="{{ asset('public/images/gallery/office.png') }}" alt="">
						<h6 class="mt-3">City</h6>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
            <h4 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h4>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
            <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
          </div>
					<div class="col-md-1"></div>
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
          <div class="col-md-4 mb-3">
		  	<div class="travel-tips">
				<div class="relative">
					<div class="layer transition"></div>
					<img src="public/direngine/images/destinations/tabuhan.jpg" alt="" class="img-fluid transition">
				</div>
				<div class="bottom">
					<div class="title">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet .....</div>
					<div class="link">Read More</div>
				</div>
			</div>
          </div>
          <div class="col-md-4 mb-3">
		  	<div class="travel-tips">
				<div class="relative">
					<div class="layer transition"></div>
					<img src="public/direngine/images/destinations/merbabu.jpg" alt="" class="img-fluid transition">
				</div>
				<div class="bottom">
					<div class="title">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet .....</div>
					<div class="link">Read More</div>
				</div>
			</div>
          </div>
          <div class="col-md-4 mb-3">
		  	<div class="travel-tips">
				<div class="relative">
					<div class="layer transition"></div>
					<img src="public/direngine/images/destinations/bromo.jpg" alt="" class="img-fluid transition">
				</div>
				<div class="bottom">
					<div class="title">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet .....</div>
					<div class="link">Read More</div>
				</div>
			</div>
          </div>
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