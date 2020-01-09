<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use App\Users;
use Validator;


class SignIn extends Controller
{
    public function index()
    {
        $data = array(
            'name' => 'David Gaul',
            'message' => 'lorem ipsum'
        );


        return view('frontend.auth.signin');
    }
    public function authLogin(Request $request)
    {
        $cek = Users::where("email", $request->email)->get();
        $json['success'] = "error";
        $json['error'] = "Sign in failed";
        if(isset($cek[0]->email)){
            if(password_verify($request->password, $cek[0]->password)){
                $data['user'] = array(
                    'id_user' => $cek[0]->id_user,
                    'firstname' => $cek[0]->firstname,
                    'lastname' => $cek[0]->lastname,
                    'email' => $cek[0]->email,
                    'phone' => $cek[0]->phone,
                    'avatar' => $cek[0]->avatar
                );
                $request->session()->put($data);
                $json = array(
                    "success" => "Sign in success.",
                    "redirect" =>  url('/')
                );
            }
        }

        return response()->json($json);
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
        $json = [];
        $json['success'] = "error";
        foreach ($rule as $key => $value) {
            $json[$key] = $validator->errors()->has($key) ? $validator->errors()->all()[$i] : "";
            if($validator->errors()->has($key)){
                $i++;
            }
        }
        if($validator->passes()) {
            $cek = Users::where("email", $request->email)->get();
            $json['email'] = isset($cek[0]->email) ? "Email is already registered" : "";

            if($json['email']==""){
                DB::table('users')->insert(
                    [
                        'email' =>  $request->email,
                        'password' => password_hash($request->password, PASSWORD_DEFAULT),
                        'firstname' =>  $request->firstname,
                        'lastname' =>  $request->lastname,
                        'phone' =>  '',
                        'avatar' => 'default.png'
                    ]
                );
                $json = array(
                    "success" => "Sign up success.",
                    "redirect" =>  "?msg=success"
                );
            }
        }

    	return response()->json($json);
    }

    function signout(){
        Session::forget('user');
        return redirect('/');
    }
}
