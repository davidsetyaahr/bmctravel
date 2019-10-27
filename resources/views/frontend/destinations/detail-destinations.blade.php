@extends('frontend/common/template')
@section('container')

<style>
    .override{
        height: 500px !important;
    }
    .bg-ctgr{
        background-color: violet;
    }
    .overlay{
        height: 500px !important;
    }
</style>
    @foreach ($destinations as $item)
    <div style="background-image: url('/images/gallery/{{$item->gallery }}');" class="hero-wrap js-fullheight-travel override">
        <div class="overlay js-fullheight">
                <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '100%' }">
                          <h1 class="color-white" data-scrollax="properties: { translateY: '30%'}"><b>Wonderfull <br>{{$item->destination_name }}</b> </h1>
                            <div class="inline-package detail mt-4">
                              <div class="bottom">
                                <div class="left" style="width :100%">
                                  <div class="img" @if($item->category_name == "Mountain") style='background-color: #f2eee5 !important; opacity:0.5 !important;' @endif>
                                    <img src="{{ url('images/gallery/rocks.png') }}" alt="">
                                    <p>Mountain</p>
                                  </div>
                                  <div class="img" @if($item->category_name == "Beach") style='background-color: #f2eee5 !important; opacity:0.5 !important;' @endif>
                                    <img src="{{ url('images/gallery/sunrise.png') }}" alt="">
                                    <p>Beach</p>
                                  </div>
                                  <div class="img" @if($item->category_name == "Waterfall") style='background-color: #f2eee5 !important; opacity:0.5 !important;' @endif>
                                    <img src="{{ url('images/gallery/waterfall.png') }}" alt="">
                                    <p>Waterfall</p>
                                  </div>
                                  <div class="img" @if($item->category_name == "City") style='background-color: #f2eee5 !important; opacity:0.5 !important;' @endif>
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
    </div>
    <section class="ftco-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center heading-section ftco-animate">
              <h2 class="mb-4 pb-3"><strong>{{ $item->destination_name}}</strong></h2>
              <p>{{ $item->overview}}</p>
              <p>{{ $item->information}}</p>
            </div>
          </div>
        </div>
    </section>
    @endforeach

@endsection