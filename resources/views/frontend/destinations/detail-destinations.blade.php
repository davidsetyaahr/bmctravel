@extends('frontend/common/template')
@section('container')

<style>
/*     .override{
        height: 500px !important;
    }
    .bg-ctgr{
        background-color: violet;
    }
    .overlay{
        height: 500px !important;
    }
 */</style>
    @foreach ($destinations as $item)
    <?php
        $ex = explode(",",$item->gallery);
        $img = App\Gallery_model::where("id_gallery",$ex[0])->take(1)->get();
    ?>
<div style="background-image: url('{{ url('images/gallery/'.$img[0]->img) }}');"  class="js-fullheight-travel full">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-8 text-center mt-5 ftco-animate">

          <h1 class="color-white bold ls-1">{{ $item->destination_name }}</h1>
          <p>{{ $item->city_name }} - {{ $item->province_name }} </p>
          <h6 class="badge-green">{{ $item->category_name }}</h6>
        </div>
        </div>
      </div>
      </div>

<!--     <div style="background-image: url('/images/gallery/{{$img[0]->img }}');" class="hero-wrap js-fullheight-travel override">
        <div class="overlay js-fullheight">
                <div class="container">
                        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '100%' }">
                          <h1 class="color-white" data-scrollax="properties: { translateY: '30%'}"><b>{{$item->destination_name }}</b> </h1>
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
 -->    <section class="ftco-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center heading-section ftco-animate">
              <h2 class="mb-4 pb-3"><strong>Overview</strong></h2>
              <p>{{ $item->overview}}</p>
            </div>
          </div>
          <div class="row mt-4">
            <?php
              
              foreach ($ex as $value) {
                $imgLoop = App\Gallery_model::where("id_gallery",$value)->take(1)->get();
            ?>

            <div class="col-md-4">
              <img src="{{ url('images/gallery/'.$imgLoop[0]->img) }}" alt="" class="img-fluid mb-3">
            </div>
            <?php } ?>
          </div>
        </div>
    </section>
    <section class="ftco-section" style="padding : 0px !important" id="maping">
        <iframe src="{{ $item->map }}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
    <section class="ftco-animate mt-5 mb-5">
      <div class="container">
        <div class="row">
            <div class="col-md-12 text-center heading-section ftco-animate">
              <h2 class="mb-4 pb-3"><strong>Information</strong></h2>
            </div>
            <div class="col-md-12">
            <?php echo $item->information ?>
            </div>
          </div>
      </div>
    </section>
    @endforeach

@endsection