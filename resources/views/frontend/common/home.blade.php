@extends('frontend/common/template')
@section('container')
    <div class="hero-wrap js-fullheight" style="background-image: url('direngine/images/bg_1.jpg');">
      <div class="overlay" style="background: rgb(0,0,0,0.5);height:100%"></div>
      <div class="container">
        <div class="row slider-text js-fullheight align-items-center justify-content-start justify-content-md-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4 text-center"  data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><strong>ONE STOP <br></strong> Travel Service</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
            <div class="block-17 my-4">
              <form action="" method="post" class="d-block d-flex">
                <div class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                  	<input type="text" class="form-control" placeholder="Destinations, Ex : Mountain, Waterfall, etc ">
                  </div>
                  <div class="select-wrap one-third">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="" id="" class="form-control" placeholder="Keyword search">
						<option>Where</option>
						<optgroup label="East Java">
							<option>Bondowoso</option>
							<option>Probolinggo</option>
							<option>Jember</option>
						</optgroup>
						<optgroup label="Bali">
							<option>Bali</option>
						</optgroup>
						<optgroup label="West Nusa Tenggara">
							<option>Lombok</option>
						</optgroup>
                    </select>
                  </div>
                </div>
                <input type="submit" class="search-submit btn btn-primary" value="Search">  
              </form>
            </div>
            <p>Or browse the highlights</p>
            <p class="browse d-md-flex">
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-guarantee"></i>Mountain</a></span>
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-like"></i>Waterfall</a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-like"></i>Adventure</a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-meeting-point"></i>City</a></span> 
            	<span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i class="flaticon-shopping-bag"></i>Beach</a></span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center heading-section ftco-animate">
					<h2 class="mb-4 pb-3"><strong>Sekapur Sirih</strong></h2>
					<p>Selamat datang di BMC Travel Service. Traveling saat ini telah menjadi kebutuhan pokok disamping kebutuhan akan sandang, pangan, dan papan. Kebutuhan akan merefreshing pikiran karena penat dengan aktifitas pekerjaan dan kehidupan sehari-hari mendorong orang-orang untuk melakukan traveling untuk menyegarkan kembali pikiran. Perkembangan golongan menengah juga menjadi pendorong industri tour dan travel merespon permintaan pasar akan layanagn tour dan travel yang semakin meningkat. Selayaknya usaha di bidang jasa lainnya, BMC Travel Service selaku perusahaan di bidang tour dan travel akan selalu memberikan pelayanan yang maksimal kepada tamu-tamu kami. Peningkatan kualitas dan kuantitas layanan senantiasa kami jaga sebaik mungkin demi kepuasan tamu. Kami dengan setulus hati melayani anda, memberikan kepuasan akan layanan wisata yang terbaik yang dapat kami lakukan. Terimakasih telah memilih BMC Travel Service sebagai mitra perjalanan wisata anda.</p>
					<p>Salam Hangat</p>
					<h1 style="font-family: 'Sacramento', cursive;">Fajar N Eristyawan</h1>
					<b>CEO BMC Travel Service</b>
				</div>
				<!--div class="col-md-6">
					<div class="carousel-destinationtext owl-carousel">
						<div class="item">
							<img src="direngine/images/destinations/lombok.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h6>
							</div>
						</div>
						<div class="item">
							<img src="direngine/images/destinations/tabuhan.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h6>
							</div>
						</div>
						<div class="item">
							<img src="direngine/images/destinations/merbabu.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h6>
							</div>
						</div>
					</div>
				</div-->
			</div>
		</div>
    </section>
    
    <section class="ftco-section ftco-destination">
    	<div class="container">
    		<div class="row">
				<div class="col-md-10 heading-section ftco-animate">
					<h4 class="mb-4"><strong>Featured</strong> Destination</h4>
				</div>
				<div class="col-md-2">
					<a href="" class="btn border-grey">Explore More <span class="ion-md-arrow-dropright"></span> </a>
				</div>
			</div>
		</div>
		<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="destinationtext owl-carousel ftco-animate">
						<div class="item">
							<img src="direngine/images/destinations/kawah-wurung.png" alt="" class="img-fluid">
							<div class="box">
								<h6>Explore East Java</h6>
							</div>
						</div>
						<div class="item">
							<img src="direngine/images/destinations/ijen.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Explore Bondowoso</h6>
							</div>
						</div>
						<div class="item">
							<img src="direngine/images/destinations/merbabu.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Mountain Vibes</h6>
							</div>
						</div>
						<div class="item">
							<img src="direngine/images/destinations/bali.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Beach Vibes</h6>
							</div>
						</div>
						<div class="item">
							<img src="direngine/images/destinations/tabuhan.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Menjangan & Tabuhan Island</h6>
							</div>
						</div>
						<div class="item">
							<img src="direngine/images/destinations/bromo.jpg" alt="" class="img-fluid">
							<div class="box">
								<h6>Bromo Midnight</h6>
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
					<a href="" class="btn border-grey">Explore More  <span class="ion-md-arrow-dropright"></span></a>
				</div>
	        </div>
			<div class="row mt-3">
				<div class="col-md-12">
					<div class="step-by-step">
						<div class="line-step"></div>
						<div class="this-step" style="width : 19%">
							<span class="bullet ion-md-radio-button-on"></span>
							<div class="text active">
								<span class="ion-md-arrow-dropup up"></span>
								1 to 3 days
							</div>
						</div>
						<div class="this-step" style="width : 19%">
							<span class="bullet ion-md-radio-button-off"></span>
							<div class="text">
								4 to 6 days
							</div>
						</div>
						<div class="this-step" style="width : 19%">
							<span class="bullet ion-md-radio-button-off"></span>
							<div class="text">
								7 to 9 days
							</div>
						</div>
						<div class="this-step" style="width : 19%">
							<span class="bullet ion-md-radio-button-off"></span>
							<div class="text">
								10 to 12 days
							</div>
						</div>
						<div class="this-step" style="width : 19%">
							<span class="bullet ion-md-radio-button-off"></span>
							<div class="text">
								Less than 12 days
							</div>
						</div>
					</div>
				</div>
			</div>    		
    	</div>
    	<div class="container">
    		<div class="row mt-5">
				<div class="col-sm col-md-12 ftco-animate">
				<div class="destinationtext owl-carousel ftco-animate">
						<div class="item">
							<img src="direngine/images/destinations/kawah-wurung.png" alt="" class="img-fluid">
						</div>
						<div class="item">
							<img src="direngine/images/destinations/ijen.jpg" alt="" class="img-fluid">
						</div>
						<div class="item">
							<img src="direngine/images/destinations/merbabu.jpg" alt="" class="img-fluid">
						</div>
						<div class="item">
							<img src="direngine/images/destinations/bali.jpg" alt="" class="img-fluid">
						</div>
						<div class="item">
							<img src="direngine/images/destinations/tabuhan.jpg" alt="" class="img-fluid">
						</div>
						<div class="item">
							<img src="direngine/images/destinations/bromo.jpg" alt="" class="img-fluid">
						</div>
    				</div>
				</div>
			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(direngine/images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Some fun facts</h2>
            <span class="subheading">Bmc Travel Service</span>
          </div>
        </div>
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="40">0</strong>
		                <span>Destination Places</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="20">0</strong>
		                <span>Packages</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>Articles</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>



    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
          	<span class="subheading">Bmc Travel Service</span>
            <h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
            <p><a href="#" class="btn btn-primary btn-outline-primary mt-4 px-4 py-3">Read more</a></p>
          </div>
					<div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel">
		              <div class="item">
		                <div class="testimony-wrap d-flex">
		                  <div class="user-img mb-5" style="background-image: url(direngine/images/person_1.jpg)">
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
		                  <div class="user-img mb-5" style="background-image: url(direngine/images/person_2.jpg)">
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
		                  <div class="user-img mb-5" style="background-image: url(direngine/images/person_3.jpg)">
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
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Recent Blog</span>
            <h2><strong>Tips</strong> &amp; Articles</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('direngine/images/image_1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">8 Best homestay in Philippines that you don't miss out</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('direngine/images/image_2.jpg');">
              </a>
              <div class="text p-4">
              	<span class="tag">Culture</span>
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('direngine/images/image_3.jpg');">
              </a>
              <div class="text p-4">
              	<span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('direngine/images/image_4.jpg');">
              </a>
              <div class="text p-4">
              	<span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
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