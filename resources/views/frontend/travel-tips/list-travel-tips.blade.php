@extends('frontend/common/template')
@section('container')
    <div class="hero-wrap js-fullheight-travel" style="background-image: url('direngine/images/bg_4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight-travel align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-7 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Travel Tips</span></p>
            <h3 class="color-white" data-scrollax="properties: { translateY: '30%'}">Travel Tips</h3>
            <div class="block-17 my-4">
                <form action="" method="post" class="d-block d-flex">
                  <div class="fields d-block d-flex">
                    <div class="textfield-search one-third">
                        <input type="text" class="form-control" placeholder="Search Here...">
                    </div>
                  </div>
                  <input type="submit" class="search-submit btn btn-primary" value="Search">
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
       <div class="container">
        <div class="row d-flex">
          <div class="col-md-4">
		  	    <div class="travel-tips">
				      <div class="relative">
					      <div class="layer transition"></div>
					        <img src="direngine/images/destinations/tabuhan.jpg" alt="" class="img-fluid transition">
				</div>
				<div class="bottom">
					<div class="title">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet .....</div>
          <div class="link"><a href="{{url('/travel-tips/detail-travel') }}">Read More</a></div>
				</div>
			</div>
          </div>
          <div class="col-md-4">
		  	<div class="travel-tips">
				<div class="relative">
					<div class="layer transition"></div>
					<img src="direngine/images/destinations/merbabu.jpg" alt="" class="img-fluid transition">
				</div>
				<div class="bottom">
					<div class="title">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet .....</div>
					<div class="link">Read More</div>
				</div>
			</div>
          </div>
          <div class="col-md-4">
		  	<div class="travel-tips">
				<div class="relative">
					<div class="layer transition"></div>
					<img src="direngine/images/destinations/bromo.jpg" alt="" class="img-fluid transition">
				</div>
				<div class="bottom">
					<div class="title">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet .....</div>
					<div class="link"><a href="{{url('/travel-tips/detail-travel') }}">Read More</a></div>
				</div>
			</div>
          </div>
        </div>
      </div>
            </div>
          </section>

@endsection
