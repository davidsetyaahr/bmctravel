<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bartha Travel Service - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/ionicons.min.css') }}">

  </head>
<body class="bg-light">
<div class="loading">
  <div class="img">
    <img src="{{url('public/images/common/loading.gif')}}" alt="">
    <p>Loading...</p>
  </div>
</div>
<section class="ftco-section" style="padding : 2rem 0px !important">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="sign-in">
                <div class="left">
                  <div class="logo">
                    Bartha Travel Service
                  </div>
                  <div class="info">
                    Daftar untuk akun baru
                  </div>
                  <div class="sosmed">
                    <a href="" class="google">
                        <img src="{{ url('public/images/common/google.png') }}" alt="">
                        <span>Google</span>
                    </a>
                    <a href="" class="facebook">
                      <img src="{{ url('public/images/common/facebook-logo.png') }}" alt="">
                        <span>Facebook</span>
                    </a>
                  </div>
                  <div class="or">
                    <span>or</span>
                  </div>
                  <div class="form">
                    <form action="signup/auth" method="post" class="formNoLoad">
                    @csrf
                      <div class="row">
                        <?php 
                          if(isset($_GET['msg'])){
                            echo "<div class='col-md-12'><div class='alert alert-success'>Sign Up Success</div></div><br>";
                          }
                        ?>
                          <div class="col-md-6">
                            <label for="">Nama Depan</label>
                            <p>Masukan nama depan </p>
                            <p class="error" data-id="firstname"></p>
                            <input type="text" class="form-control" id="firstname" name="firstname">
                          </div>
                          <div class="col-md-6">
                            <label for="">Nama Belakang</label>
                            <p>Masukan nama belakang</p>
                            <p class="error" data-id="lastname"></p>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                          </div>
                          <div class="col-md-6">
                              <br>
                              <label for="">Email</label>
                              <p>Masukan email</p>
                              <p class="error" data-id="email"></p>
                              <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col-md-6">
                              <br>
                              <label for="">Password</label>
                              <p>Masukan kata sandi</p>
                              <p class="error" data-id="password"></p>
                            <input type="password" class="form-control" id="password" name="password">
                          </div>
                      </div>
                      <br>
                    <input type="submit" class="btn btn-danger btn-red" value="Daftar">
                    </form>
                    <p class="mt-1 text-center">Sudah Memiliki Akun? <a href="{{ url('signin') }}" class="link-red"> Masuk disini</a></p>
                  </div>
                </div>
                <div class="right" style="background:url('{{url('images/banner/market.jpg')}}');background-size:cover;background-position:center">
                  <div class="layer"></div>
                  <div class="quote">
                    <div class="icon-quote">
                      <span class="ion-md-quote"></span>
                    </div>
                    <div class="text-quote">
                    The more I traveled the more I realized that fear makes strangers of people who should be friends.
                    <div class="bmc">Shirley MacLaine</div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="copyright-login">Copyright 2019 - Baratha Travel Service</p>
            </div>
        </div>
    </div>
</section>

  <script src="{{ asset('public/direngine/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/frontend.js') }}"></script>
    
  </body>
</html>