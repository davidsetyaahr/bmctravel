<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Users;

class SignIn extends Controller
{
    public function index()
    {
        return view('frontend.auth.signin');
    }

    public function signup()
    {
        return view('frontend.auth.signup');
    }
    public function register(Request $request)
    {
        $cek = Users::where("email", $request->email)->get();
        if(isset($cek[0]->email)){
            $error = array(
                "email" => "Email is already registered",
            );
        }
        else{
            $error = array(
                "email" => "",
            );
        }

        header("content-type:json/application");
        echo json_encode($error);
    }
}
