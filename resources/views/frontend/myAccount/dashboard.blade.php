@extends('frontend/myAccount/my-account')
@section('menu-account')
<div class="alert alert-success">
        <h6 class="bold">Welcome back, {{$user->firstname}}</h6>
</div>
@endsection
