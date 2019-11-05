<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use \App\Admins;

class Admin extends Controller
{
    
    function login()
    {
        return view('backend.login');
    }

    public function loginPost(Request $request){
        
        
         $email = $request->email;
         $password = md5($request->password);

        $cek = Admins::where("email",$email)->where("password",$password)->get();
        if(empty($cek[0]->id_admin)){
            return redirect('admin')->with('alert','Password atau Email, Salah !');
        }
        else{
            return redirect('admin/dashboard');
        }
    }
    
    function dashboard()
    {
        // if(!Session::get('login')){
        //     return redirect('admin')->with('alert','login dulu woyyyy');
        // }
        // else{
        //     return view('admin.dashboard');
        // }
        return view('backend.index');
    }
}
