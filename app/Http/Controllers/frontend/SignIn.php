<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Users;
use Validator;

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
        
        $rule = array(
            'firstname' => 'required|regex:/^[a-zA-Z]+$/u',
            'lastname' => 'required|regex:/^[a-zA-Z]+$/u',
            'email' => 'required|email',
            'password' => 'required'
        );
        $validator = Validator::make($request->all(), $rule);

        $i = 0;
        $error = [];
        foreach ($rule as $key => $value) {
            $error[$key] = $validator->errors()->has($key) ? $validator->errors()->all()[$i] : "";
            if($validator->errors()->has($key)){
                $i++;
            }
        }
        if($validator->passes()) {
            $cek = Users::where("email", $request->email)->get();
            $error['email'] = isset($cek[0]->email) ? "Email is already registered" : "";

            if($error['email']==""){
                return response()->json(['success'=>'Added new records.']);
            }
        }
        
    	return response()->json($error);

        
/*         if(isset($cek[0]->email)){
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
        */
    }
}
