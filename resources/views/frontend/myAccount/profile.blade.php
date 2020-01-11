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

        <label for="">First Name</label>
        <input type="text" class="input" value="{{$userSession['user']['firstname']}}" disabled>
        <br>
        <label for="">Last Name</label>
        <input type="text" class="input" value="{{$userSession['user']['lastname']}}" disabled>
        <br>
        <label for="">Email</label>
        <input type="text" class="input" value="{{$userSession['user']['email']}}" disabled>
        <br>
        <label for="">Phone</label>
        <input type="text" class="input"  value="{{$userSession['user']['phone']}}" disabled>
        <br>
        {{-- <tbody>
                <tr>
                    <td>
                        Firstname
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{ $userSession['user']['firstname'] }}
                    </td>
                </tr>
                <tr>
                    <td>
                        Lastname
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{ $userSession['user']['lastname'] }}
                    </td>
                </tr>
        </tbody> --}}
            {{-- Phone   : {{ $userSession['user']['phone'] }}
            Email   : {{ $userSession['user']['email'] }} --}}
        <?php
        }
        else {
            echo "EROR";
        }
        ?>
        {{-- </table> --}}
    </form>




@endsection
