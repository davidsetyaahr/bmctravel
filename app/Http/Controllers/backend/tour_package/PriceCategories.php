<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PriceCategories extends Controller
{
    function index()
    {
        return view('backend.tour_package.price_categories.index');
    }
}
