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

<!--                 <div class="m-t-30">
                <p >Filter By</p>
                    <p class="m-t-auto browse d-md-flex">
                        <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-guarantee"></i>Mountain</a></span>
                        <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-like"></i>Waterfall</a></span>
                        <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-like"></i>Adventure</a></span>
                        <span class="d-flex justify-content-md-center align-items-md-center"><a href="#"><i class="flaticon-meeting-point"></i>City</a></span>
                        <span class="d-flex justify-content-md-center align-items-md-	center"><a href="#"><i class="flaticon-shopping-bag"></i>Beach</a></span>
                    </p>
                </div>
 -->        </div>
        </div>
      </div>
      </div>
      
     <div class="container">
       <div class="columns">
         <div class="col-md-4 bg-danger">
           MENU 1
         </div>
         <div class="col-md-3 bg-warning">
           MENU 2
         </div>
         <div class="col-md-2 bg-info">
           MENU 3
        </div>
       </div>
     </div>
   
@endsection
