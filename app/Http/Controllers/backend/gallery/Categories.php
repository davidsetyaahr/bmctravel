<?php

namespace App\Http\Controllers\backend\gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Categories extends Controller
{
    function index()
    {
        return view('backend.gallery.categories.index');
    }
}
