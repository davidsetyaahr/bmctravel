@extends('frontend/myAccount/my-account')
@section('menu-account')
<div class="row">
<div class="compare-package" data-id='[]' data-url="{{ url('tour-package/compare/') }}">
        <div class="img">
          <img src="{{url('public/images/common/balance.png')}}" alt="">
        </div>
        <p>
          Compare <span>0</span>
        </p>
      </div>

@foreach($packages as $data)
    <div class="col-md-12 mt-3">
        <div class="inline-package bg-white">
            <div class="top">
                    <div class="left">
                      <img src="{{url('/images/gallery/'.$data->img)}}" alt="" class="img-fluid" style="width:100%">
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
                                <span>IDR {{number_format($price,0,',','.')}} / person</span>
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
            @endsection
            