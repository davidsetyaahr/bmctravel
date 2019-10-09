<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelTips extends Controller
{
    public function index()
    {
        return view('frontend\travel-tips\list-travel-tips');
    }

    public function detail()
    {
        return view('frontend\travel-tips\detail-travel');
    }
}
