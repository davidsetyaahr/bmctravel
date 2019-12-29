<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo $desc ?>">
    
<!--     <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
 -->	
    <link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">   

    <link rel="stylesheet" href="{{ asset('public/direngine/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('public/direngine/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/direngine/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('public/direngine/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('public/direngine/css/bootstrap-datepicker.css') }}">
<!--     <link rel="stylesheet" href="{{ asset('direngine/css/jquery.timepicker.css') }}">
 -->    <link rel="stylesheet" href="{{ asset('public/direngine/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/style.css') }}">
  </head>
  <body>
<div class="to-top">Back To Top</div>
<div class="top-menu">

<nav class="navbar navbar-expand-sm navbar-dark nav-grey">
      <div class="container">
        <div class="left">
          <a href="https://g.page/barathahotel?share" target="_blank" class="navbar-brand view-map" style="margin-right : 0">View On Map</a>
          <span class="limit">|</span>
          <a href="http://djtrans-group.com/" target="_blank" class="navbar-brand view-map">DJ TRANS GROUP</a>
        </div>
        <div class="right">
        <a href="https://www.instagram.com/bmctravelservice/" target="_blank" class="navbar-brand view-map"><span class="ion-logo-instagram"></span> Instagram</a>
          <a href="https://api.whatsapp.com/send?phone=6281252744445&text=Hello BMC Travel Service. I want to book some package. Can you help me?" target="_blank" class="navbar-brand view-map"><span class="ion-logo-whatsapp"></span> Whatsapp</a>
          <a href="#" class="navbar-brand view-map"><span class="ion-logo-youtube"></span> YouTube</a>

<!--           <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><span class="ion-logo-facebook"></span> Instagram</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#"><span class="ion-logo-whatsapp"></span> Whatsapp</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="ion-logo-youtube"></span> YouTube</a>
          </li>
        </ul>
 -->        </div>
</div>  
</nav>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light nav-white" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('public/direngine/images/BMC-Logo.png') }}" alt="" style="height:40px;"> <span> BMC Travel Service.</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ url('about') }}" class="nav-link">About</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">Services</a>
            <div class="dropdown-menu animate slideIn">
              <a class="dropdown-item" href="{{ url('tour-package') }}"><span class="ion-ios-planet"></span> Travel Package For Foreigner</a>
              <a class="dropdown-item" href="{{ url('tour-package') }}"><span class="ion-ios-planet"></span> Travel Package For Domestic</a>
              <a class="dropdown-item" href="#"><span class="ion-ios-bed"></span> Accommodation</a>
              <a class="dropdown-item" href="#"><span class="ion-ios-car"></span> Transportations</a>
              <a class="dropdown-item" href="#"><span class="ion-ios-airplane"></span> Airport/City Transfer</a>
              <a class="dropdown-item" href="#"><span class="ion-ios-paw"></span> Outbond</a>
            </div>			
		    	</li>
          <li class="nav-item"><a href="{{ url('destinations') }}" class="nav-link">Destinations</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Travel Tips</a></li>
          <?php 
            $userSession = session()->all();
            if(isset($userSession['user'])){
          ?>
            <li class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
              {{ $userSession['user']['firstname'] }}
              </a>
              <div class="dropdown-menu animate slideIn">
                <a href="{{ url('my-account') }}" class="dropdown-item">
                  My account
                </a>
                <a href="" class="dropdown-item">
                  Sign out
                </a>
              </div>
            </li>
          <?php
            }
            else{
          ?>
          <li class="nav-item cta"><a href="{{ url('signin') }}" class="nav-link"><span>Sign In</span></a></li>
        <?php } ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <img src="{{ asset('public/direngine/images/icons/united-kingdom.png') }}">
              &nbsp;
              <img src="{{ asset('public/direngine/images/icons/indonesia.png') }}">
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 </div>
  <!-- END nav -->
    @yield('container')
    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">BMC Travel Service</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/bmctravelservice/" target="_blank""><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Service</a></li>
                <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Become a partner</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jl. Saliwiryo Pranowo Gg. Taman No.11, Kotakulon, Bondowoso, Indonesia</span></li>
	                <li><a href="tel:+6281252744445"><span class="icon icon-phone"></span><span class="text">+62 8125 2744 445</span></a></li>
	                <li><a href="mailto:marketing@bmctravelservice.com"><span class="icon icon-envelope"></span><span class="text">marketing@bmctravelservice.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!----  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a!-->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	BMC Travel Service - 2019
</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('public/direngine/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/popper.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('public/direngine/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/aos.js') }}"></script>
  <script src="{{ asset('public/direngine/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/bootstrap-datepicker.js') }}"></script>
  <!--script src="{{ asset('direngine/js/jquery.timepicker.min.js') }}"></script-->
  <script src="{{ asset('public/direngine/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/google-map.js') }}"></script>
  <script src="{{ asset('public/direngine/js/main.js') }}"></script>
  <script src="{{ asset('public/direngine/js/frontend.js') }}"></script>
  </body>
</html>