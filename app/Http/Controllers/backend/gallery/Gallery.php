<?php

namespace App\Http\Controllers\backend\gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Gallery_model;

class Gallery extends Controller
{
    function index()
    {
        $galeri = Gallery_model::all();
        return view('backend.gallery.gallery.list-gallery' ,  ['id_gallery' => $galeri]);
    }

    function add()
    {
        return view('backend.gallery.gallery.add-gallery');
    }

    function show()
    {
        //
    }
}
