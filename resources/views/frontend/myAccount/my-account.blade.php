@extends('frontend/common/template')
@section('container')
<div style="background-image: url('public/direngine/images/bg_4.jpg');"  class="js-fullheight-travel">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-md-8 text-center mt-5 ftco-animate">

          <h3 class="color-white">My Account</h3>
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
      
      <div class="container">
        <div class="row menu-account">
          <div class="col-md-2">
             <div class="row mt-1 side-line">
               <div class="col-md-12">
                   <div class="text-center">
                     <h6 class="mb-3 bottom-line">Menu</h6>
                   </div>
                 </div>
                 <div class="col-md-12">
                    <a href="{{ url("my-account") }}">
                      <div class="mt-2">
                        <p> Profile<p>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-12">
                    <a href="{{ url("my-account/notification") }}">
                      <div class="mt-2">
                        <p> Notifications</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-12">
                    <a href="{{ url("my-account/booking") }}">
                      <div class="mt-2">
                       <p> Booking</p>
                      </div>
                   </a>
                   </div>
               </div>
            </div>
            <div class="col-md-10">
              <div class="row mt-1">
                <div class="col-md-12">
                  <div class="text-center">
                    @yield('menu-account')
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>

      
        
          
        
            

        
   
@endsection
