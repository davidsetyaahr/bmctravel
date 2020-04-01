@extends('frontend.common.template')
@section('container')
    <div class="js-fullheight-travel" style="background-image: url('{{url('images/banner/indonesia.jpg')}}');background-position:bottom">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 mt-5 ftco-animate text-center">
            <h3 class="color-white">Semua Paket Tavel</h3>
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
    <section class="ftco-section ftco-degree-bg p-0">
      <div class="compare-package" data-id='[]' data-url="{{ url('tour-package/compare/') }}">
        <div class="img">
          <img src="public/images/common/balance.png" alt="">
        </div>
        <p>
          Compare <span>0</span>
        </p>
      </div>
      <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <small><span class="color-red">Home</span> > Paket Wisata</small>
            </div>
            <div class="col-md-6">
                <small class="float-right"><span class="color-red">Paket Wisata: </span> Nilai 4.8/5 (berdasarkan dari 65514 ulasan) | Paket mulai dari IDR 1.000.000</small>
            </div>
            <div class="col-md-12">
                <p class="mt-2">Paket Wisata di Baratha Travel Service adalah salah satu paket wisata untuk berpergian tanpa repot. Dengan perencanaan yang mulus, pengaturan, transfer uang yang sangat mudah, pemesanan paket liburan adalah cara terbaik untuk menjelajahi beragam WIsata dunia. Kita semua memiliki alasan tersendiri untuk bepergian. Entah untuk berpergian sendiri untuk berpetualang, mencari liburan yang tenang dengan pasangan kita, atau mengajak seluruh keluarga untuk liburan yang tak terlupakan. Apapun alasannya, paket wisata Baratha Travel Service memastikan setiap wisatawan mendapatkan pengalaman yang berharga untuk waktu yang lama.</p>    
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
                <h5>Wisata terbaik untuk perjalananmu</h5>
                <div class="mt-3">
                    <a href="#" class="btn btn-primary btn-outline-primary btn-sm mb-2">Mount Bromo</a>
                    <a href="#" class="btn btn-primary btn-outline-primary btn-sm mb-2">Kawah Ijen</a>
                    <a href="#" class="btn btn-primary btn-outline-primary btn-sm mb-2">Pantai Tabuhan</a>
                    <a href="#" class="btn btn-primary btn-outline-primary btn-sm mb-2">Pantai Menjangan</a>
                </div>
            </div>
        </div>
      </div>
    </section> <!-- .section -->
  <section class="bg-light py-4" style="background : #f5f6fa !important">
    <div class="container">
    <div class="row mt-2">
          <div class="col-md-3">
          <div class="row">
          <div class="col-md-12">
                <h5 class="mb-3 bold ls-1">Filter</h5>
              </div>
          </div>
            <div class="row left-filter box-white border">
              <div class="col-md-12 mt-4">
                <h6 class="mb-3">Kategori Destinasi/Tunjuan <span class="ion-ios-arrow-down float-right"></span></h6>
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
                <h6 class="mb-3">Aktifitas Perjalanan <span class="ion-ios-arrow-down float-right"></span></h6>
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
                <h6 class="mb-3">Durasi <span class="ion-ios-arrow-down float-right"></span></h6>
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
                <h6 class="mb-3">Anggaran Per Orang (IDR) <span class="ion-ios-arrow-down float-right"></span></h6>
                <div class="form-check custom-control custom-checkbox mb-2">
                  <input type="checkbox" class="form-check-input custom-control-input" id="a">
                  <label class="custom-control-label" for="a">
                    <span>Kurang dari 1.000.000</span>
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
                <h6 class="mb-4 bold ls-1">Menampilkan 10 Paket Wisata</h6>
              </div>
              <div class="col-md-12">
                <div class="border bg-white p-2" style="overflow:auto">
                  <select name="" class="custom-select float-right" style="width:inherit" id="">
                    <option value="">Populer</option>
                    <option value="">Harga: Tinggi ke Rendah</option>
                    <option value="">Harga: Rendah ke Tinggi</option>
                    <option value="">Durasi: Tinggi ke Rendah</option>
                    <option value="">Durasi: Rendah ke Tinggi</option>
                  </select>
                </div>
              </div>
              @foreach($packages as $data)
              <div class="col-md-12 mt-3">
                <div class="inline-package bg-white">
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
                            <input type="checkbox" class="form-check-input custom-control-input checkCompare" id="{{$data->id_tour}}">
                            <label class="custom-control-label add-compare" data-id="" for="{{$data->id_tour}}">
                              <span>Tambah ke compare</span>
                            </label>
                          </div>
                          <div class="form-check custom-control">
                          <label for="" class="wishlist" id="wl{{$data->id_tour}}" data-id="{{$data->id_tour}}">
                            <?php 
                              $wl = "";
                              if(!empty(session()->all()['user'])){
                                  $session = session()->all()['user'];
                                  $cek = DB::table("wishlist")
                                  ->select(array(DB::raw('count(id_wishlist) ttl')))
                                  ->where("id_tour", $data->id_tour)
                                  ->where("id_user", $session['id_user'])
                                  ->get()->toArray();

                                  if($cek[0]->ttl==1){
                                    $wl = "added";
                                  }
                                }
                            ?>
                              <span class="heart {{$wl}}"></span>&nbsp; Daftar Keinginan
                          </label>
                          </div>
                        </div>
                      </div>
                      <div class="right-bottom">
                        <div class="left">
                          <div class="durations">
                             {{$data->day}} Hari & {{$data->night}} Malam
                          </div>
                          <div class="price">
                            <small>Mulai dari</small>
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
                              <span>IDR {{number_format($price,0,',','.')}} / orang</span>
                              @if($data->sale>0)
                              <del>{{number_format($data->price,0,',','.')}}</del>
                              @endif
                            </div>
                          </div>
                          <div class="include mt-2">
                              <div class="title"> Termasuk dipaket : 
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
                      <a href="{{ url('tour-package/detail-package/'.$data->id_tour.'/'.$name) }}"><span>Lihat Details</span></a>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach 
            </div>
          </div>
        </div>
    </div>
  </section>
    @endsection('container')