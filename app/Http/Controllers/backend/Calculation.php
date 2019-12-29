<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Calculation extends Controller
{
    public function index($id)
    {
        return view('backend/calculation/calculation');
    }
}
