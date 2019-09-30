<?php

namespace App\Http\Controllers\backend\destinations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class Categories extends Controller
{
    function index()
    {
        $categories = DB::table('destination_categories')->get();
        return view('backend.destinations.categories.list-categories', ['destination_categories' => $categories]);
    }
    function add(){
        return view('backend.destinations.categories.add-categories');
    }
}
