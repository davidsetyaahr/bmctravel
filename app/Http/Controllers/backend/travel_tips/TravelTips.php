<?php

namespace App\Http\Controllers\backend\travel_tips;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelTips extends Controller
{
    function index()
    {
        return view('backend.travel_tips.travel_tips.index');
    }
}
