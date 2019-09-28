@extends('frontend.common.template')
@section('container')

    <div class="hero-wrap js-fullheight-travel" style="background-image: url('https://img.traveltriangle.com/attachments/pictures/847252/original/tour.jpg?tr=w-1366,h-305')">
      <div class="overlay js-fullheight-travel"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight-travel align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span> <span>Travel Package</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel Package</h1>
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
        	<div class="col-lg-3 sidebar ftco-animate">
        		<div class="sidebar-wrap bg-light ftco-animate">
                    <form action="#">
                        <div class="fields">
                            <div class="form-group">
                            <h3 class="heading mb-4">Categories</h3>
                            <div class="form-check custom-control custom-checkbox mb-2" style="display:inline-block">
                                <input type="checkbox" class="form-check-input custom-control-input" id="customCheckA">
                                <label class="custom-control-label" for="customCheckA">Mountain</label>
                            </div>
                            &nbsp;
                            <div class="form-check custom-control custom-checkbox mb-2" style="display:inline-block">
                                <input type="checkbox" class="form-check-input custom-control-input" id="customCheckB">
                                <label class="custom-control-label" for="customCheckB">Waterfall</label>
                            </div>
                            &nbsp;
                            <div class="form-check custom-control custom-checkbox mb-2" style="display:inline-block">
                                <input type="checkbox" class="form-check-input custom-control-input" id="customCheckC">
                                <label class="custom-control-label" for="customCheckC">City</label>
                            </div>
                            &nbsp;
                            <div class="form-check custom-control custom-checkbox mb-2" style="display:inline-block">
                                <input type="checkbox" class="form-check-input custom-control-input" id="customCheckD">
                                <label class="custom-control-label" for="customCheckD">Beach</label>
                            </div>
                      </div>
                      <hr>
		              <div class="form-group">
                            <h3 class="heading mb-4">Duration (Days)</h3>
                            <div class="form-check custom-control custom-checkbox mb-2" style="display:inline-block">
                                <input type="checkbox" class="form-check-input custom-control-input" id="customCheckA">
                                <label class="custom-control-label" for="customCheckA">1 to 3</label>
                            </div>
                            &nbsp;
                            <div class="form-check custom-control custom-checkbox mb-2" style="display:inline-block">
                                <input type="checkbox" class="form-check-input custom-control-input" id="customCheckB">
                                <label class="custom-control-label" for="customCheckB">4 to 6</label>
                            </div>
                            &nbsp;
                            <div class="form-check custom-control custom-checkbox mb-2" style="display:inline-block">
                                <input type="checkbox" class="form-check-input custom-control-input" id="customCheckC">
                                <label class="custom-control-label" for="customCheckC">7 to 9</label>
                            </div>
                            &nbsp;
                            <div class="form-check custom-control custom-checkbox mb-2" style="display:inline-block">
                                <input type="checkbox" class="form-check-input custom-control-input" id="customCheckD">
                                <label class="custom-control-label" for="customCheckD">10 or more</label>
                            </div>
                      </div>
                      <hr>
		              <div class="form-group">
                            <h3 class="heading mb-4">Budget Per Pax (IDR)</h3>
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
										  <input value="1000" min="0" max="120000" step="500" type="range"/>
										  <input value="50000" min="0" max="120000" step="500" type="range"/>
										  </svg>
										</div>
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
        		</div>
        		<div class="sidebar-wrap bg-light ftco-animate">
        			<h3 class="heading mb-4">Star Rating</h3>
        			<form method="post" class="star-rating">
							  <div class="form-check custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="form-check-input custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">
                                        <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
                                    </label>                                    
							  </div>
							  <div class="form-check custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="form-check-input custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="form-check-input custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						     </label>
							  </div>
							  <div class="form-check custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="form-check-input custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						      </label>
							  </div>
							  <div class="form-check custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="form-check-input custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">
						      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							    </label>
							  </div>
							</form>
        		</div>
          </div>
          <div class="col-lg-9">
          	<div class="row">
                    <div class="col-sm col-md-6 ftco-animate">
                            <div class="destination">
                                <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/bromo.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <h3><a href="#">Package 1</a></h3>
                                    </div>
                                    <p class="rate">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i> <small>8 Rating</small>
                                        </p>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> 2 days 3 nights</span> 
                                        <span class="ml-auto"><a href="tour-package/detail-package">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-md-6 ftco-animate">
                                <div class="destination">
                                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/ijen.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <h3><a href="#">Package 2</a></h3>
                                        </div>
                                        <p class="rate">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-o"></i> <small>8 Rating</small>
                                            </p>
                                        <p>Far far away, behind the word mountains, far from the countries</p>
                                        <hr>
                                        <p class="bottom-area d-flex">
                                            <span><i class="icon-map-o"></i> 2 days 3 nights</span> 
                                            <span class="ml-auto"><a href="#">Discover</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <div class="col-sm col-md-6 ftco-animate">
                            <div class="destination">
                                <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/merbabu.jpg);">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="icon-search2"></span>
                                    </div>
                                </a>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <h3><a href="#">Package 3</a></h3>
                                    </div>
                                    <p class="rate">
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star"></i>
                                            <i class="icon-star-o"></i> <small>8 Rating</small>
                                        </p>
                                    <p>Far far away, behind the word mountains, far from the countries</p>
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> 2 days 3 nights</span> 
                                        <span class="ml-auto"><a href="#">Discover</a></span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm col-md-6 ftco-animate">
                                <div class="destination">
                                    <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/tabuhan.jpg);">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-search2"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <h3><a href="#">Package 4</a></h3>
                                        </div>
                                        <p class="rate">
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star"></i>
                                                <i class="icon-star-o"></i> <small>8 Rating</small>
                                            </p>
                                        <p>Far far away, behind the word mountains, far from the countries</p>
                                        <hr>
                                        <p class="bottom-area d-flex">
                                            <span><i class="icon-map-o"></i> 2 days 3 nights</span> 
                                            <span class="ml-auto"><a href="#">Discover</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm col-md-6 ftco-animate">
                                    <div class="destination">
                                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/menjangan.jpg);">
                                            <div class="icon d-flex justify-content-center align-items-center">
                                                <span class="icon-search2"></span>
                                            </div>
                                        </a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <h3><a href="#">Pakcage 5</a></h3>
                                            </div>
                                            <p class="rate">
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star"></i>
                                                    <i class="icon-star-o"></i> <small>8 Rating</small>
                                                </p>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> 2 days 3 nights</span> 
                                                <span class="ml-auto"><a href="#">Discover</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm col-md-6 ftco-animate">
                                        <div class="destination">
                                            <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(direngine/images/destinations/bromo.jpg);">
                                                <div class="icon d-flex justify-content-center align-items-center">
                                                    <span class="icon-search2"></span>
                                                </div>
                                            </a>
                                            <div class="text p-3">
                                                <div class="d-flex">
                                                    <h3><a href="#">Package 6</a></h3>
                                                </div>
                                                <p class="rate">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-o"></i> <small>8 Rating</small>
                                                    </p>
                                                <p>Far far away, behind the word mountains, far from the countries</p>
                                                <hr>
                                                <p class="bottom-area d-flex">
                                                    <span><i class="icon-map-o"></i> 2 days 3 nights</span> 
                                                    <span class="ml-auto"><a href="#">Discover</a></span>
                                                </p>
                                            </div>
                                        </div>
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
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

    @endsection('container')