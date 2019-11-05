<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class About extends Controller
{
    public function index()
    {
        $attr = array(
            "title" => "BMC Travel Service - About",
            "desc" => "About BMC Travel Service"
        );

        return view('frontend.pages.about', $attr);
    }
}
