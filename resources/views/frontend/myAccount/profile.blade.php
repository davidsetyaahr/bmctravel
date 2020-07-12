@extends('frontend/myAccount/my-account')
@section('menu-account')
    <h6 class="bottom-line">Profile</h6>
        <?php
            $userSession = session()->all();
            if(isset($userSession['user'])){
          ?>
    <div class="gambar">
        <img src="{{ url('images/gallery/avatar'.$userSession['user']['avatar'])}}" width="200px">
    </div>


    <form class="posisi-nama">
        {{-- <table class="table table-borderless"> --}}

        <label for="">Nama Depan</label>
        <input type="text" class="input" value="{{$userSession['user']['firstname']}}" disabled>
        <br>
        <label for="">Nama Belakang</label>
        <input type="text" class="input" value="{{$userSession['user']['lastname']}}" disabled>
        <br>
        <label for="">Email</label>
        <input type="text" class="input" value="{{$userSession['user']['email']}}" disabled>
        <br>
        <label for="">No. HP</label>
        <input type="text" class="input"  value="{{$userSession['user']['phone']}}" disabled>
        <br>
        <?php
        }
        else {
            echo "EROR";
        }
        ?>
    </form>




@endsection
