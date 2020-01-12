@extends('frontend/myAccount/my-account')
@section('menu-account')
        <div class="row">
            <div class="col-md-12">
            <form action="//samehadaku.tv">
                <div class="form-group">
                    <label>Old Password :</label>
                    <input type="password" class="form-control custom normal" id="email">
                </div>
                <div class="form-group">
                    <label>New Password :</label>
                    <input type="password" class="form-control custom normal" id="pwd">
                </div>
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>
    </div>  
@endsection