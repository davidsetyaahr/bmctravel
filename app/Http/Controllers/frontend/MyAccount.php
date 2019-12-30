<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyAccount extends Controller
{
    public function index()
    {
        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution"
        );
        return view('frontend.myAccount.profile', $attr);
    }
    
    public function setting()
    {
        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution"
        );
        return view('frontend.myAccount.setting', $attr);
    }
    
    public function security()
    {
        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution"
        );
        return view('frontend.myAccount.security', $attr);
    }

}








