<?php

namespace App\Http\Controllers\backend\gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Gallery_categories_model;

class Categories extends Controller
{
    function index()
    {
        $galeri = Gallery_categories_model::all();
        return view('backend.gallery.categories.list-categories-gallery' ,  ['id_category' => $galeri]);
    }

    function add()
    {
        return view('backend.gallery.categories.add-categories-gallery');
    }
}
