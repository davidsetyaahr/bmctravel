@extends('frontend.common.template')
@section('container')
    <div class="js-fullheight-travel" style="background-image: url('https://img.traveltriangle.com/attachments/pictures/847252/original/tour.jpg?tr=w-1366,h-305')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 mt-5 ftco-animate text-center">
            <h3 class="color-white">All Travel Package</h3>
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
    <section class="ftco-section ftco-degree-bg p-0 mb-5">
      <div class="compare-package">
        <span>
          <img src="images/common/balance.png" alt="">
        </span>
        <p>
          Compare
        </p>
      </div>
      <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <small><span class="color-red">Home</span> > Tour Package</small>
            </div>
            <div class="col-md-6">
                <small class="float-right"><span class="color-red">Tour Package: </span> rated 4.8/5 (based on 65514 reviews) | Package starting from IDR 1.000.000</small>
            </div>
            <div class="col-md-12">
                <p class="mt-2">Tour Packages are one of the best ways to travel hassle-free. With seamless planning, arrangements, and transfers being taken care of, booking holiday packages is the best way to explore the world’s varied landscapes. We all have our reasons and excuses to travel. Either we’re looking for a solo adventure, seeking a quiet romantic getaway with our partner, or taking the whole family for a memorable holiday vacation. Whatever the reason is, travel packages of Travel Triangle make sure every tourist get an experience to cherish for a long time.</p>    
            </div>
            <div class="col-md-12 mt-5">
    				<div class="destinationtext owl-carousel ftco-animate">
						<div class="item">
              <div class="relative">
                <img src="direngine/images/destinations/kawah-wurung.png" alt="" class="img-fluid">
                <div class="box">
                  <h6>Explore East Java</h6>
                </div>
              </div>
						</div>
						<div class="item">
              <div class="relative">
                <img src="direngine/images/destinations/ijen.jpg" alt="" class="img-fluid">
                <div class="box">
                  <h6>Explore Bondowoso</h6>
                </div>
              </div>
						</div>
						<div class="item">
              <div class="relative">
                <img src="direngine/images/destinations/merbabu.jpg" alt="" class="img-fluid">
                <div class="box">
                  <h6>Mountain Vibes</h6>
                </div>
              </div>
						</div>
						<div class="item">
              <div class="relative">
                <img src="direngine/images/destinations/bali.jpg" alt="" class="img-fluid">
                <div class="box">
                  <h6>Beach Vibes</h6>
                </div>
              </div>
						</div>
						<div class="item">
              <div class="relative">
                <img src="direngine/images/destinations/tabuhan.jpg" alt="" class="img-fluid">
                <div class="box">
                  <h6>Menjangan & Tabuhan Island</h6>
                </div>
              </div>
						</div>
						<div class="item">
              <div class="relative">
                <img src="direngine/images/destinations/bromo.jpg" alt="" class="img-fluid">
                <div class="box">
                  <h6>Bromo Midnight</h6>
                </div>
              </div>
						</div>
    				</div>
                </div>
            <div class="col-md-12 mt-5 mb-3">
                <h5>Best Destinations For Your Trip</h5>
                <div class="mt-3">
                    <a href="#" class="btn btn-primary btn-outline-primary btn-sm mb-2">Mount Bromo</a>
                    <a href="#" class="btn btn-primary btn-outline-primary btn-sm mb-2">Kawah Ijen</a>
                    <a href="#" class="btn btn-primary btn-outline-primary btn-sm mb-2">Pantai Tabuhan</a>
                    <a href="#" class="btn btn-primary btn-outline-primary btn-sm mb-2">Pantai Menjangan</a>
                </div>
            </div>
        </div>
        <div class="row mt-2">
          <div class="col-md-3">
            <div class="row left-filter">
              <div class="col-md-12 mt-4">
                <h6 class="mb-3">Tour Categories <span class="ion-ios-arrow-down float-right"></span></h6>
                <?php 
                  for ($i=1; $i <= 5; $i++) { 
                ?>
                <div class="form-check custom-control custom-checkbox mb-2">
                  <input type="checkbox" class="form-check-input custom-control-input" id="a<?= $i?>">
                  <label class="custom-control-label" for="a<?= $i?>">
                    <span>Category <?= $i?></span>
                  </label>
                </div>
                <?php } ?>
              </div>
              <div class="col-md-12 mt-4">
                <h6 class="mb-3">Tour Type <span class="ion-ios-arrow-down float-right"></span></h6>
                <?php 
                  for ($i=1; $i <= 5; $i++) { 
                ?>
                <div class="form-check custom-control custom-checkbox mb-2">
                  <input type="checkbox" class="form-check-input custom-control-input" id="a<?= $i?>">
                  <label class="custom-control-label" for="a<?= $i?>">
                    <span>Category <?= $i?></span>
                  </label>
                </div>
                <?php } ?>
              </div>
              <div class="col-md-12 mt-4">
                <h6 class="mb-3">Durations <span class="ion-ios-arrow-down float-right"></span></h6>
                <?php 
                  for ($i=1; $i <= 10; $i+=3) { 
                ?>
                <div class="form-check custom-control custom-checkbox mb-2">
                  <input type="checkbox" class="form-check-input custom-control-input" id="a<?= $i?>">
                  <label class="custom-control-label" for="a<?= $i?>">
                    <span><?= $i?> - <?= $i+2 ?> days</span>
                  </label>
                </div>
                <?php } ?>
              </div>
              <div class="col-md-12 mt-4">
                <h6 class="mb-3">Budget Per Person (IDR) <span class="ion-ios-arrow-down float-right"></span></h6>
                <?php 
                  for ($i=1; $i <= 10; $i+=3) { 
                ?>
                <div class="form-check custom-control custom-checkbox mb-2">
                  <input type="checkbox" class="form-check-input custom-control-input" id="a<?= $i?>">
                  <label class="custom-control-label" for="a<?= $i?>">
                    <span><?= number_format(1000000*$i,0,',','.')?> - <?= number_format(($i+2) * 1000000,0,',','.') ?></span>
                  </label>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-12">
                <h6 class="mt-4">Showing 10 Tour Packages</h6>
              </div>
              <div class="col-md-12">
                <div class="border p-2" style="overflow:auto">
                  <select name="" class="custom-select float-right" style="width:inherit" id="">
                    <option value="">Popularity</option>
                    <option value="">Price: Hight to Low</option>
                    <option value="">Price: Low to High</option>
                    <option value="">Duration: Hight to Low</option>
                    <option value="">Duration: Low to High</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12 mt-3">
                <div class="inline-package">
                  <div class="top">
                  <div class="left">
                      <img src="direngine/images/destinations/merbabu.jpg" alt="" class="img-fluid">
                      <div class="sticky-note">
        								<span>Reguler Package</span>
				        			</div>
                    </div>
                    <div class="right">
                      <div class="right-top">
                        <div class="title">
                           <h6 class="mb-0"> Wonderfull Bromo Ijen Papuma</h6>
                        </div>
                        <div class="compare">
                        <div class="form-check custom-control custom-checkbox">
                            <input type="checkbox" class="form-check-input custom-control-input" id="aa">
                            <label class="custom-control-label add-compare" data-id="1" for="aa">
                              <span>Add to compare</span>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="right-bottom">
                        <div class="left">
                          <div class="durations">
                            3Days & 2Nights
                          </div>
                          <div class="price">
                            <small>Starting from</small>
                            <span class="badge badge-success">12% off</span>
                            <div class="perpax">
                              1.000.000 <span>/ person</span>
                              <del>1.200.000</del>
                            </div>
                          </div>
                          <div class="include mb-3 mt-2">
                              <div class="title">Destinations : <small>Mount Bromo, Ijen, Papuma Beach</small></div>
                          </div>
                          <div class="include">
                              <div class="title">Package include : </div>
                              <small>Travel T-shirt If More Than 6pax</small>
                          </div>
                        </div>
                        <div class="right">
                            <div class="activities">
                              <a href="">Adventure</a>
                              <a href="">Honey Moon</a>
                              <a href="">Family</a>
                              <a href="">Hiking</a>
                            </div>
                            <div class="desc">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi voluptas soluta
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="left">
                      <div class="img">
                        <img src="images/gallery/rocks.png" alt="">
                        <p>Mountain</p>
                      </div>
                      <div class="img">
                        <img src="images/gallery/sunrise.png" alt="">
                        <p>Beach</p>
                      </div>
                      <div class="img">
                        <img src="images/gallery/waterfall.png" alt="">
                        <p>Waterfall</p>
                      </div>
                      <div class="img">
                        <img src="images/gallery/office.png" alt="">
                        <p>City</p>
                      </div>
                    </div>
                    <div class="right">
                      <a href="tour-package/detail-package/1"><span>View Details</span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> <!-- .section -->

    @endsection('container')