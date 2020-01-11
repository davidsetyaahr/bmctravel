              <div class="body-data">
                <h6 class="bold text-center"><img src="{{ url('public/images/common/location.png') }}" width='30px' alt=""> <br> Meeting Point</h6>
                <p class="text-center mt-3">
                  {{$meeting_point}}
                </p>
                <br>
                <h6 class="bold text-center"><img src="{{ url('public/images/common/hotel.png') }}" width='30px' alt=""> <br> Accommodation</h6>

                @foreach($hotels as $h)
          <div class="hotel">
            <div class="row">
              <div class="col-md-12">
                <div class="hotel-name">
                  {{$h->hotel_name}}
                </div>
              </div>
              <div class="col-md-4">
                <div class="images">
                  <div class="img-top">
                    <img src="{{ url('images/gallery/'.$h->img) }}" alt="" class="img-fluid">
                  </div>
                  <div class="img-bottom">
                    <?php 
                      $img = explode(",",$h->gallery);
                      foreach ($img as $img) {
                        $imgRoom = DB::table("gallery")
                        ->select("img")
                        ->where("id_gallery",$img)
                        ->get();
                    ?>
                    <div class="img">
                      <img src="{{ url('images/gallery/'.$imgRoom[0]->img) }}" alt="" class="img-fluid">
                    </div>
                    <?php
                      }
                    ?>
                  </div>
                  <div class="desc">
                      <div class="website">
                        <a href="">View Website</a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                  <div class="hotel-information">
                    <h6 class="bold">Day {{$h->day}} &nbsp; <span class="color-green"><small> {{$h->room_name}}</small></span> <span class="float-right color-orange"><small>Bondowoso - East Java</small></span></h6>
                    <p>{{$h->overview}}</p>
                    <hr>
                    <iframe src="{{$h->map}}" width="100%" height="150" frameborder="0" style="border:0;" allowfullscreen=""></iframe>                    
                  </div>
              </div>
            </div>
          </div>
          @endforeach
                
                </div>
