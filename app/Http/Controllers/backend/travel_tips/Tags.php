<?php

namespace App\Http\Controllers\backend\travel_tips;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tags extends Controller
{
    function index()
    {
        return view('backend.travel_tips.tags.index');
    }
}
