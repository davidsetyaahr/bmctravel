@extends('frontend/myAccount/my-account')
@section('menu-account')
    <h6 class="bottom-line">Change Password</h6>
        <div class="row">
            <div class="col-md-11">
            <form action="//samehadaku.tv">
                <div class="form-group">
                    <label>Old Password :</label>
                    <input type="password" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label>New Password :</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <button type="submit" class="btn btn-danger">Submit</button>
            </form>
        </div>
    </div>  
@endsection