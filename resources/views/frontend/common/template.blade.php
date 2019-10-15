<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bmc Travel Service - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
    <link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">    

    <link rel="stylesheet" href="{{ asset('direngine/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('direngine/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('direngine/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('direngine/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('direngine/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('direngine/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('direngine/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('direngine/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('direngine/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('direngine/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('direngine/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('direngine/css/style.css') }}">
  </head>
  <body>
<div class="top-menu">

<nav class="navbar navbar-expand-sm navbar-dark nav-grey">
      <div class="container">

        <a href="" class="navbar-brand view-map" style="margin-right : 0">View On Map</a>
        <span class="limit">|</span>
        <a href="" class="navbar-brand view-map">DJ TRANS GROUP</a>
    <ul class="navbar-nav ml-auto">
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
</div>  
</nav>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light nav-white" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html"><img src="{{ asset('direngine/images/BMC-Logo.png') }}" alt="" style="height:50px;"> BMC Travel Service.</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about" class="nav-link">About</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
          <div class="dropdown-menu animate slideIn">
				<a class="dropdown-item" href="tour-package"><span class="ion-ios-planet"></span> Travel Package</a>
				<a class="dropdown-item" href="#"><span class="ion-ios-bed"></span> Accommodation</a>
				<a class="dropdown-item" href="#"><span class="ion-ios-car"></span> Rent Car</a>
				<a class="dropdown-item" href="#"><span class="ion-ios-airplane"></span> Airport/City Transfer</a>
				<a class="dropdown-item" href="#"><span class="ion-ios-paw"></span> Outbond</a>
      </div>			
			</li>
          <li class="nav-item"><a href="destinations" class="nav-link">Destinations</a></li>
          <li class="nav-item"><a href="travel-tips" class="nav-link">Travel Tips</a></li>
          <li class="nav-item"><a href="#" class="nav-link">
            <img src="{{ asset('direngine/images/icons/united-kingdom.png') }}">
            &nbsp;
			  <img src="{{ asset('direngine/images/icons/indonesia.png') }}">
      </a></li>
          <li class="nav-item cta"><a href="signin" class="nav-link"><span>Sign In</span></a></li>
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
              <h2 class="ftco-heading-2">Bmc Travel Service</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
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
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
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
	Bmc Travel Service - 2019
</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('direngine/js/jquery.min.js') }}"></script>
  <script src="{{ asset('direngine/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('direngine/js/popper.min.js') }}"></script>
  <script src="{{ asset('direngine/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('direngine/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('direngine/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('direngine/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('direngine/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('direngine/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('direngine/js/aos.js') }}"></script>
  <script src="{{ asset('direngine/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('direngine/js/bootstrap-datepicker.js') }}"></script>
  <!--script src="{{ asset('direngine/js/jquery.timepicker.min.js') }}"></script-->
  <script src="{{ asset('direngine/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('direngine/js/google-map.js') }}"></script>
  <script src="{{ asset('direngine/js/main.js') }}"></script>
  <script src="{{ asset('direngine/js/frontend.js') }}"></script>
  </body>
</html>