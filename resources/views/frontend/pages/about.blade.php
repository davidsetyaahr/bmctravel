@extends('frontend/common/template')
@section('container')
<div class="hero-wrap js-fullheight-page" style="background-image: url('direngine/images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight-page align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tentang Kami</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row d-md-flex">
	    		<div class="col-md-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>

		              <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

		              <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
		              	<div>
			                <h2 class="mb-4">Lorem Ipsum Dolor Sit Amet</h2>
			              	<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque dolores, similique saepe nam in repellat corrupti cupiditate dignissimos quibusdam magnam pariatur. Quas omnis necessitatibus sed exercitationem ipsam ratione dolorem non.</p>
			                <p>Quas omnis necessitatibus sed exercitationem ipsam ratione dolorem non. Quas omnis necessitatibus sed exercitationem ipsam ratione dolorem non</p>
				            </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
		                <div>
                        <h2 class="mb-4">Lorem Ipsum Dolor Sit Amet</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque dolores, similique saepe nam in repellat corrupti cupiditate dignissimos quibusdam magnam pariatur. Quas omnis necessitatibus sed exercitationem ipsam ratione dolorem non.</p>
                        <p>Quas omnis necessitatibus sed exercitationem ipsam ratione dolorem non. Quas omnis necessitatibus sed exercitationem ipsam ratione dolorem non</p>
                      </div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
		                <div>
                        <h2 class="mb-4">Lorem Ipsum Dolor Sit Amet</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque dolores, similique saepe nam in repellat corrupti cupiditate dignissimos quibusdam magnam pariatur. Quas omnis necessitatibus sed exercitationem ipsam ratione dolorem non.</p>
                        <p>Quas omnis necessitatibus sed exercitationem ipsam ratione dolorem non. Quas omnis necessitatibus sed exercitationem ipsam ratione dolorem non</p>
                      </div>
		              </div>
		            </div>
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

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
          	<span class="subheading">Team</span>
            <h2 class="mb-4"><strong>Our</strong> Great Team</h2>
          </div>
        </div>  
    		<div class="row justify-content-center">
    			<div class="col-md-3 ftco-animate">
            <div class="destination">
                <div class="img d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/person_1.jpg);">
                </div>
                <div class="text p-3 text-center">
                  <h3><a href="#">John Doe</a></h3>
                  <span class="listing">Manager</span>
                </div>
            </div>
    			</div>
    			<div class="col-md-3 ftco-animate">
            <div class="destination">
                <div class="img d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/person_4.jpg);">
                </div>
                <div class="text p-3 text-center">
                  <h3><a href="#">John Doe</a></h3>
                  <span class="listing">Manager</span>
                </div>
            </div>
    			</div>
    			<div class="col-md-3 ftco-animate">
            <div class="destination">
                <div class="img d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/person_3.jpg);">
                </div>
                <div class="text p-3 text-center">
                  <h3><a href="#">John Doe</a></h3>
                  <span class="listing">Manager</span>
                </div>
            </div>
    			</div>
    			<div class="col-md-3 ftco-animate">
            <div class="destination">
                <div class="img d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/person_2.jpg);">
                </div>
                <div class="text p-3 text-center">
                  <h3><a href="#">John Doe</a></h3>
                  <span class="listing">Manager</span>
                </div>
            </div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="fto-section">
        <div class="container">
            <div class="row justify-content-start mt-5 mb-5 pb-3">
              <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Partner</span>
                <h2 class="mb-4"><strong>Our</strong> Great Partner</h2>
              </div>
            </div>
            <div class="row justify-content-start mt-5 mb-5 pb-3">
              <div class="col-md-12">
                <div class="partner-slider owl-carousel ftco-animate">
                  <div class="item">
                    <div class="partner">
                      <img src="direngine/images/partner/jvto.png" alt="" class="img-fluid">
                    </div>
                  </div>
                  <div class="item">
                    <div class="partner">
                      <img src="direngine/images/partner/dj.jpeg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>

@endsection