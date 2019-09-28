<?php

namespace App\Http\Controllers\backend\data_master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Province extends Controller
{
    function index()
    {
        return view('backend.data_master.province.index');
    }
}
