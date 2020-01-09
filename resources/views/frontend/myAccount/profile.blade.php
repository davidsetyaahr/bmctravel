@extends('frontend/myAccount/my-account')
@section('menu-account')
    <h6 class="bottom-line">Profile</h6>
    <div class="gambar">
        <img src="images/gallery/IMG_0678.jpg" width="200px">
    </div>


    <form class="posisi-nama">
        <table class="table table-borderless">
        <?php
            $userSession = session()->all();
            if(isset($userSession['user'])){
          ?>
        {{-- <tbody> --}}
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
        {{-- </tbody> --}}
            {{-- Phone   : {{ $userSession['user']['phone'] }}
            Email   : {{ $userSession['user']['email'] }} --}}
        <?php
        }
        else {
            echo "EROR";
        }
        ?>
        </table>
    </form>




@endsection
