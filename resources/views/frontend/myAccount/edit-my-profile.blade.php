@extends('frontend/myAccount/my-account')
@section('menu-account')

<form action="{{url("my-account/update")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $user->id_user }}">
    <div class="form-group">
        <label for="">First Name :</label>
        <input type="text" class="form-control" name="firstname" value="{{$user->firstname}}">
    </div>
    <div class="form-group">
        <label for="">Last Name :</label>
        <input type="text" class="form-control" name="lastname" value="{{$user->lastname}}">
    </div>
    <div class="form-group">
        <label for="">Email :</label>
        <input type="text" class="form-control" name="email" value="{{$user->email}}">
    </div>
    <div class="form-group">
        <label for="">Phone :</label>
        <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
    </div>
    <div class="form-group">
        <label for="">Avatar</label>
        <input type="file" class="form-control-file" name="avatar">
        <br>
        Avatar yang diupload harus berukuran maksimal 2mb
    </div>
    <br>
    <button class="btn btn-primary" type="submit"><span class="mdi mdi-content-save"></span>  Save</button>
    <button class="btn btn-danger" type="reset"><span class="mdi mdi-refresh"></span> Reset</button>
</form>

@endsection
