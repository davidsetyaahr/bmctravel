@extends('frontend/common/template')
@section('my-account',true)
@section('container')
<?php
  switch (Request::segment(2)) {
    case '':
      $dashboard = "active";
      break;
    case 'notification':
      $notif = "active";
      break;
    case 'booking':
      $booking = "active";
      break;
    case 'wishlist':
      $wishlist = "active";
      break;
    case 'profile':
      $profile = "active";
      break;
    case 'changepassword':
      $change = "active";
      break;
    case 'review':
      $rev = "active";
      break;
  }
?>
<div class="banner-account" data-notif="{{url('my-account/getnotif')}}">
  {{-- <img src="{{url('images/avatar/david.jpeg')}}" alt=""> --}}
  <img src="{{ url('images/avatar/'.$user->avatar) }}" alt="" >>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="user-info text-center">
        <h5 class="bold">{{$user->firstname}} {{$user->lastname}}</h5>
        <p class="email">{{$user->email}}</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus fugiat a maiores nam id illo? Provident, doloribus, fugiat dolore officiis dolor pariatur consectetur quam molestiae expedita nobis ad sequi itaque!</p>
      </div>
      <div class="box-white">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link <?php echo isset($dashboard) ? "active" : "" ?>" href="{{url('my-account')}}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo isset($notif) ? "active" : "" ?>" href="{{url('my-account/notification')}}">Pemberitahuan <span class="badge badge-info" id="countNotif"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo isset($booking) ? "active" : "" ?>" href="{{url('my-account/booking')}}">Pemesanan dan Pembayaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo isset($wishlist) ? "active" : "" ?>" href="{{url('my-account/wishlist')}}">Daftar Keinginan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo isset($rev) ? "active" : "" ?>" href="{{url('my-account/review')}}">Ulasan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo isset($profile) ? "active" : "" ?>" href="{{url('my-account/profile')}}">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php echo isset($change) ? "active" : "" ?>" href="{{url('my-account/changepassword')}}">Ubah Password</a>
          </li>
        </ul>
        <br>
        @yield('menu-account')
      </div>
    </div>
  </div>
</div>
<br>
@endsection
