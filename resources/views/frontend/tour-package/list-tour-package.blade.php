@extends('frontend.common.template')
@section('container')

    <div class="hero-wrap js-fullheight-travel" style="background-image: url('https://img.traveltriangle.com/attachments/pictures/847252/original/tour.jpg?tr=w-1366,h-305')">
      <div class="overlay js-fullheight-travel"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight-travel align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 mt-5 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h3 class="color-white" data-scrollax="properties: { translateY: '30%'}">All Travel Package</h3>
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
      
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
        </div>
      </div>
    </section> <!-- .section -->

    @endsection('container')