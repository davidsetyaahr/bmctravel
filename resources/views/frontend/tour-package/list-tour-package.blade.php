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
          <img src="public/images/common/balance.png" alt="">
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
                @foreach ($tour_type as $type)
                <div class="item">
                  <div class="relative">
                    <img src="{{url('/images/gallery/'.$type->img)}}" alt="" class="img-fluid">
                    <div class="box">
                      <h6>{{$type->type_name}}</h6>
                    </div>
                  </div>
                </div>
                @endforeach
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
                <h6 class="mb-3">Destination Categories <span class="ion-ios-arrow-down float-right"></span></h6>
                <?php 
                  $num = 1; 
                ?>
                @foreach ($category as $ct)
                <div class="form-check custom-control custom-checkbox mb-2">    
                  <input type="checkbox" class="form-check-input custom-control-input" id="a<?= $num?>">
                  <label class="custom-control-label" for="a<?= $num?>">
                    <span>{{$ct->category_name}}</span>
                  </label>
                </div>
                <?php $num = $num+1; ?>
                @endforeach
              </div>
              <div class="col-md-12 mt-4">
                <h6 class="mb-3">Trip Activities <span class="ion-ios-arrow-down float-right"></span></h6>
                @foreach ($activities as $item)
                    
                <div class="form-check custom-control custom-checkbox mb-2">
                  <input type="checkbox" class="form-check-input custom-control-input" id="a<?= $num?>">
                  <label class="custom-control-label" for="a<?= $num?>">
                    <span>{{$item->activities}}</span>
                  </label>
                </div>
                <?php $num = $num+1 ?>
                @endforeach
              </div>
              <div class="col-md-12 mt-4">
                <h6 class="mb-3">Durations <span class="ion-ios-arrow-down float-right"></span></h6>
              @foreach ($durations as $item)
                <div class="form-check custom-control custom-checkbox mb-2">
                  <input type="checkbox" class="form-check-input custom-control-input" id="a">
                  <label class="custom-control-label" for="a">
                    <span>{{$item->day}} Days {{$item->night}} Nights</span>
                  </label>
                </div>
                @endforeach
              </div>
              <div class="col-md-12 mt-4">
                <h6 class="mb-3">Budget Per Person (IDR) <span class="ion-ios-arrow-down float-right"></span></h6>
                <div class="form-check custom-control custom-checkbox mb-2">
                  <input type="checkbox" class="form-check-input custom-control-input" id="a">
                  <label class="custom-control-label" for="a">
                    <span>Less than 1.000.000</span>
                  </label>
                </div>
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
              @foreach($packages as $data)
              <div class="col-md-12 mt-3">
                <div class="inline-package">
                  <div class="top">
                    <div class="left">
                      <img src="{{url('/images/gallery/'.$data->img)}}" alt="" class="img-fluid">
                      <div class="sticky-note">
        								<span>{{$data->category_name}}</span>
				        			</div>
                    </div>
                    <div class="right">
                      <div class="right-top">
                        <div class="title">
                           <h6 class="mb-0">{{$data->tour_name}}</h6>
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
                             {{$data->day}} Days & {{$data->night}} Nights
                          </div>
                          <div class="price">
                            <small>Starting from</small>
                            <?php 
                              if($data->sale>0){
                                  $sale = $data->price*$data->sale/100;
                                  $price = $data->price-$sale;
                            ?>
                            <span class="badge badge-success">discount {{$data->sale}}% off</span>
                            <?php }
                            else{
                              $price = $data->price;
                            }
                            ?>
                            <div class="perpax">
                              <span>IDR {{number_format($price,0,',','.')}} / person</span>
                              @if($data->sale>0)
                              <del>{{number_format($data->price,0,',','.')}}</del>
                              @endif
                            </div>
                          </div>
                          <div class="include mt-2">
                              <div class="title"> Package include : 
                              <br>
                              <?php 
                                $include = DB::table('tour_informations as ti')
                                ->join('informations as i', 'ti.id_information','i.id_informations')
                                ->select('text')
                                ->where('ti.id_tour',$data->id_tour)
                                ->limit(2)
                                ->get();
                                ?>
                              @foreach($include as $i)
                                <small>
                                {{$i->text}}
                              </small>
                              @endforeach
                              <small>
                                and more
                              </small>
                          </div>
                          </div>
                        </div>
                        <div class="right">
                            <div class="activities">
                            <?php 
                                $destinations = DB::table('itinerary as i')
                                ->join('detail_itinerary as di','i.id_itinerary','di.id_itinerary')
                                ->join('destinations as d','di.id_destination','d.id_destination')
                                ->select('d.destination_name')
                                ->where('i.id_tour', $data->id_tour)
                                ->where('di.id_destination','!=','1')
                                ->where('di.id_destination','!=','2')
                                ->where('di.id_destination','!=','3')
                                ->get();
                              ?>
                              @foreach($destinations as $dest)
                              <a href="">{{$dest->destination_name}}</a>
                              @endforeach
                            </div>
                            <div class="desc">
                              {{substr($data->overview,0,100) }} ...
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bottom">
                    <div class="left">
                      <?php 
                            $cat = DB::table('itinerary as i')
                            ->join('detail_itinerary as di','i.id_itinerary','di.id_itinerary')
                            ->join('destinations as d','di.id_destination','d.id_destination')
                            ->join('destination_categories as dc','dc.id_category','d.id_category')
                            ->join('gallery as g','dc.id_gallery','g.id_gallery')
                            ->select('dc.category_name','g.img')
                            ->groupBy('dc.category_name')
                            ->groupBy('g.img')
                            ->where('i.id_tour', $data->id_tour)
                            ->where('di.id_destination','!=','1')
                            ->where('di.id_destination','!=','2')
                            ->where('di.id_destination','!=','3')
                            ->limit(4)
                            ->get();
                            $count = count($cat);

                            if($count==4){
                              unset($cat[3]);
                            }
                            $width = 100/$count;
                      ?>
                      
                      @foreach($cat as $x => $c)
                      <div class="img" style="width:{{$width}}%">
                          <img src="{{url('images/gallery/'.$c->img)}}" alt="">
                          <p>{{$c->category_name}}</p>
                        </div>
                        @endforeach
                        @if($count==4)
                        <div class="img" style="width:{{$width}}%">
                          <img src="{{url('images/gallery/other.png')}}" alt="">
                          <p>Others</p>
                        </div>
                          @endif
                    </div>
                    <div class="right">
                      <?php 
                        $name = strtolower(str_replace(' ','-',$data->tour_name));
                      ?>
                      <a href="{{ url('tour-package/detail-package/'.$data->id_tour.'/'.$name) }}"><span>View Details</span></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach 
            </div>
          </div>
        </div>
      </div>
    </section> <!-- .section -->

    @endsection('container')