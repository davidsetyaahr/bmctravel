@extends('frontend/common/template')
@section('container')
<div style="background-image: url('{{url('images/banner/bromo.jpg')}}');background-position:bottom"  class="js-fullheight-travel">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-8 text-center mt-5 ftco-animate">

          <h3 class="color-white">Destinasi/Tujuan</h3>
          <div class="block-17 my-4">
          <form action="{{url("destinations/search")}}" method="get" class="d-block d-flex">
                      <div class="fields d-block d-flex">
                        <div class="textfield-search one-third">
                            <input type="text" class="form-control" name="category" placeholder="Destinations, Ex : Mountain, Waterfall, etc ">
                        </div>
                        <div class="select-wrap one-third">
                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                          <select name="id_city" id="" class="form-control" placeholder="Keyword search">
                              <option value="0">Where</option>
                              @foreach ($province as $item)
                              <optgroup label="{{$item->province_name}}">
                                <?php 
                                  $city = DB::table('city')
                                    ->where('province_id', $item->id_province)
                                    ->get(); 
                                ?>
                                @foreach ($city as $item)
                                <option value="{{$item->id_city}}">{{$item->city_name}}</option>
                                @endforeach
                              </optgroup>
                              @endforeach
                          </select>
                        </div>
                      </div>
                      <input type="submit" class="search-submit btn btn-primary" value="Search">
                    </form>
          </div>
         </div>
        </div>
      </div>
      </div>

    <section class="ftco-section">
			<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 text-center">
            <h3 class="line-before"><strong> OVERVIEW</strong></h3>
            <p class="mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel magnam esse, sunt minima quae reprehenderit deleniti obcaecati dolorem enim aliquid optio dolor suscipit cupiditate? Vitae similique odit ratione facilis fuga!</p>
          </div>
        </div>
					<div class="row mt-5 ftco-animate">

						@foreach($destinations as $item)
            <?php
              $ex = explode(",",$item->gallery);
              $img = App\Gallery_model::where("id_gallery",$ex[0])->take(1)->get();
            ?>
						<div class="col-md-3 col-6">
            <a href="{{ url('/destinations/detail-destinations/'.$item->id_destination) }}">
              <div class="package1 mb-4 page-destination">
                <div class="relative hidden">
                  <div class="layer transition"></div>
                  <div class="sticky-note">
                    <span>{{$item->category_name}}</span>
                  </div>
                  <img src="{{ url('/images/gallery/'.$img[0]->img) }}" alt="" class="img-fluid transition">
                  <div class="view-link transition">Lihat Detail</div>
                </div>
                <div class="text-bottom mt-2">
                  <div class="title">{{$item->destination_name}}</div>
                  <div class="price-tour"><span><small class="text-right">{{$item->province_name.' - '. $item->city_name}}</small></span></div>
                </div>
              </div>
            </a>
            	</div>
						@endforeach
					</div>
				</div>
      </section>
@endsection
