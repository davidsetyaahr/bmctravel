<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Durations extends Controller
{
    function index()
    {
        return view('backend.tour_package.durations.index');
    }
}
