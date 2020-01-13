@extends('frontend/common/template')
@section('container')
<div style="background-image: url('{{url('/images/banner/jeep.jpg')}}');background-position:bottom !important"  class="js-fullheight-travel">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-7 text-center mt-5 ftco-animate">

          <h3 class="color-white">Travel Tips</h3>
          <div class="block-17 my-4">
          <form action="{{url("travel-tips/search")}}" method="get" class="d-block d-flex">
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

    <section class="ftco-section">
       <div class="container">
        <div class="row d-flex">
            @foreach ($travel_tips as $trvltips)
                <div class="col-md-4">
                    <div class="travel-tips">
                        <div class="relative">
                            <div class="layer transition"></div>
                                <img src="{{ url('/images/gallery/'.$trvltips->img) }}" alt="" class="img-fluid transition">
                        </div>
                        <div class="bottom">
                            <div class="title">{{$trvltips->title}}</div>
                            <div class="link"><a href="{{url('/travel-tips/detail-travel/'.$trvltips->permalink) }}">Read More</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
                </div>
            </div>
         </div>
        </div>
    </section>

@endsection
