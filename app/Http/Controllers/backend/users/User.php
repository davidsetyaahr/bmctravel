<?php

namespace App\Http\Controllers\backend\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Users;

class User extends Controller
{
    function index()
    {
        $user = Users::all();
        return view('backend.users.user.list-user' ,  ['id_user' => $user]);
    }

    function add()
    {
        return view('backend.users.user.add-user');
    }
}
