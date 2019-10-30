<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourPackage extends Controller
{
    public function index()
    {
        return view('frontend.tour-package.list-tour-package');
    }
    public function detail($id)
    {
        return view('frontend.tour-package.detail-tour-package');
    }
}
