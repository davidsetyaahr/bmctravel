<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bmc Travel Service - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/direngine/css/ionicons.min.css') }}">

  </head>
  <body class="bg-light">
<section class="ftco-section" style="padding : 2rem 0px !important">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="sign-in">
                <div class="left">
                  <div class="logo">
                    BMC Travel Service
                  </div>
                  <div class="info">
                    Sign up for new account
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
                          <div class="col-md-6">
                            <label for="">First Name</label>
                            <p>Lorem ipsum dolor sit </p>
                            <input type="text" class="form-control" name="firstname">
                          </div>
                          <div class="col-md-6">
                            <label for="">Last Name</label>
                            <p>Lorem ipsum dolor sit</p>
                            <input type="text" class="form-control" name="lastname">
                          </div>
                          <div class="col-md-6">
                              <br>
                              <label for="">Email</label>
                              <p>Lorem ipsum dolor sit</p>
                              <input type="email" class="form-control" name="email">
                            </div>
                            <div class="col-md-6">
                            <br>
                            <label for="">Password</label>
                            <p>Lorem ipsum dolor sit</p>
                            <input type="password" class="form-control" name="password">
                          </div>
                      </div>
                      <br>
                    <input type="submit" class="btn btn-danger btn-red" value="Sign up">
                    </form>
                    <p class="mt-1 text-center">Already have account? <a href="{{ url('signin') }}" class="link-red"> Sign in here</a></p>
                  </div>
                </div>
                <div class="right">
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
              <p class="copyright-login">Copyright 2019 - BMC Travel Service</p>
            </div>
        </div>
    </div>
</section>

  <script src="{{ asset('public/direngine/js/jquery.min.js') }}"></script>
  <script src="{{ asset('public/direngine/js/frontend.js') }}"></script>
    
  </body>
</html>