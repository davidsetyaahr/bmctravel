<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Baratha Travel Service - Home</title>
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
                    Baratha Travel Service
                  </div>
                  <div class="info">
                    Masuk ke akunmu
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
                      <form action="{{ url("signin/auth" )}}" method="post" class="formNoLoad">
                      @csrf
                      <label for="">Email</label>
                      <p>Masukan Email yang telah kamu daftarkan. </p>
                      <p class="error" data-id="error"></p>
                      <input type="email" name="email" id="error" class="form-control">
                      <br>
                      <label for="">Password</label>
                      <p>Masukan Kata Sandi yang telah daftarkan. </p>
                      <input type="password" name="password" class="form-control">
                      <a href="" class="link-red">Lupa password?</a>
                      <input type="submit" class="btn btn-danger btn-red" value="Masuk">
                    </form>
                    <p class="mt-1 text-center">Belum Memiliki Akun? <a href="{{ url('signup') }}" class="link-red"> Daftar Disini</a></p>
                  </div>
                </div>
                <div class="right">
                  <div class="layer"></div>
                  <div class="quote">
                    <div class="icon-quote">
                      <span class="ion-md-quote"></span>
                    </div>
                    <div class="text-quote">
                    The use of traveling is to regulate imagination with reality, and instead of thinking of how things may be, see them as they are
                    <div class="bmc">Samuel Johnson</div>
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
