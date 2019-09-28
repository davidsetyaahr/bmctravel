<?php

namespace App\Http\Controllers\backend\destinations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Categories extends Controller
{
    function index()
    {
        return view('backend.destinations.categories.index');
    }
}
