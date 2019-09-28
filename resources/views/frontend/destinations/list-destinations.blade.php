@extends('frontend/common/template')
@section('container')

<div class="hero-wrap js-fullheight-travel" style="background-image: url('direngine/images/bg_4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight-travel align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Destinations</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Destinations</h1>
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
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="destination">
                        <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/ijen.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Kawah Ijen</a></h3>
                            <span class="listing">Bondowoso - East Java</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="destination">
                        <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/kawah-wurung.png);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Kawah Wurung </a></h3>
                            <span class="listing">Bondowoso - East Java</span>
                        </div>
                    </div>
        </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="destination">
                        <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/merbabu.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Mount Merbabu</a></h3>
                            <span class="listing">Central Java</span>
                        </div>
                    </div>
        </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="destination">
                        <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/papuma.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Papuma Beach</a></h3>
                            <span class="listing">Jember - East Java</span>
                        </div>
                    </div>
        </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="destination">
                        <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/tabuhan.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Tabuhan Island</a></h3>
                            <span class="listing">Banyuwangi - East Java</span>
                        </div>
                    </div>
        </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="destination">
                        <a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/bromo.jpg);">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-search2"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <h3><a href="#">Mount Bromo</a></h3>
                            <span class="listing">East Java</span>
                        </div>
                    </div>
        </div>
              </div>
              <div class="row mt-5">
                <div class="col text-center">
                  <div class="block-27">
                    <ul>
                      <li><a href="#">&lt;</a></li>
                      <li class="active"><span>1</span></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">&gt;</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>
@endsection