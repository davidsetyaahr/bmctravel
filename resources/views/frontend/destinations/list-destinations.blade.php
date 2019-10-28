@extends('frontend/common/template')
@section('container')
<style>
	.override{
		height: 500px !important;
	}
</style>
<div style="background-image: url('direngine/images/bg_4.jpg');" class="hero-wrap js-fullheight-travel override">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight-travel align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <br><br><br><br><br><br><h1 style="font-size: 45px; color:white; text-shadow: -2px 2px black;" class="mb-3 bread " data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Destinations</h1>
            <div class="block-17 my-4">
                <form action="" method="post" class="d-block d-flex">
                  <div class="fields d-block d-flex">
                        <input type="text" class="form-control" placeholder="Search Here...">
                    </div>
                    <div class="textfield-search one-third">
                  </div>
                  <input type="submit" class="search-submit btn btn-primary" value="Search">
                </form>
              </div>
          </div>
                <div class="m-t-30">
                <p >Filter By</p>
                    <p class="m-t-auto browse d-md-flex">
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
					<div class="row mt-5 ftco-animate">
						
						@foreach($destinations as $item)
						<div class="col-md-3">
							<div class="package1">
								<div class="relative hidden">
									<div class="layer transition"></div>
									<div class="sticky-note">
										<span>{{$item->category_name}}</span>
									</div>
									<img src="{{ url('/images/gallery/'.$item->gallery) }}" alt="" class="img-fluid transition">
								<div class="view-link transition"><a href="{{ url('/destinations/detail-destinations/'.$item->id_destination) }}" style="color: white;">View Destination</a></div>
								</div>
								<div class="text-bottom mt-2">
									<div class="title">{{$item->destination_name}}</div>
									<div class="price-tour text-right"><span><small>{{$item->province_name.' - '. $item->city_name}}</small></span></div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
      </section>
@endsection