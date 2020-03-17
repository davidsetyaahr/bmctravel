@extends('frontend/myAccount/my-account')
@section('menu-account')
        <div class="row">
            <div class="col-md-12">
            @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

            <form action="{{url('my-account/actchangepassword')}}" method="post">
            @csrf
                <div class="form-group">
                    <label>Current Password :</label>
                    <input type="password" class="form-control custom normal" name="old_password" id="email">
                </div>
                <div class="form-group">
                    <label>New Password :</label>
                    <input type="password" class="form-control custom normal" name="new_password" id="pwd">
                </div>
                <button type="reset" class="btn btn-default">Reset</button>
                <button type="submit" class="btn btn-warning">Submit</button>
            </form>
        </div>
    </div>  
@endsection