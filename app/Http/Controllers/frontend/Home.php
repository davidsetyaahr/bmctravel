<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function index(Request $request)
    {
        $attr = array(
            "title" => "BMC Travel Service - Home",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution"
        );
        return view('frontend.common.home', $attr);
    }
}
