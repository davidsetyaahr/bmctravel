<?php

namespace App\Http\Controllers\backend\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User extends Controller
{
    function index()
    {
        return view('backend.users.user.index');
    }
}
