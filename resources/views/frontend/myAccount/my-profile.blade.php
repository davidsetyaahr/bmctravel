@extends('frontend/myAccount/my-account')
@section('menu-account')
{{-- <div class="alert alert-success">
        <h6 class="bold">Welcome back, {{$user->firstname}}</h6>
</div> --}}
{{-- <div class="container">
    <div class="row">
        <div class="col-md-6"> --}}
            <form class="">
                <div class="form-group">
                    <label for="">First Name :</label>
                    <input type="text" class="form-control" value="{{$user->firstname}}" disabled>
                </div>
                <div class="form-group">
                    <label for="">Last Name :</label>
                    <input type="text" class="form-control" value="{{$user->lastname}}" disabled>
                </div>
                <div class="form-group">
                    <label for="">Email :</label>
                    <input type="text" class="form-control" value="{{$user->email}}" disabled>
                </div>
                <div class="form-group">
                    <label for="">Phone :</label>
                    <input type="text" class="form-control"  value="{{$user->phone}}" disabled>
                </div>
                <br>
                <a href="edit-my-profile" class="btn btn-primary btn-lg">Edit</a>
            </form>
        {{-- </div>
    </div>
</div> --}}
@endsection
