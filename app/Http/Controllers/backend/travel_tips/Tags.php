<?php

namespace App\Http\Controllers\backend\travel_tips;

use App\Http\Controllers\Controller;
// use App\Travel_tips_tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tags_model;

class Tags extends Controller
{
    function index()
    {
        $tips_tags = Tags_model::all();
        return view('backend.travel_tips.tags.list-tags' , ['id_tips_tags' => $tips_tags]);
    }

    function add()
    {
        return view('backend.travel_tips.tags.add-tags');
    }

    function store(Request $request)
    {
        $tag = new Tag;
        $tag->id_tips_tag = $request->id_tips_tag;
        $tag->id_travel_tips = $request->id_travel_tips;
        $tag->id_tag = $request->id_tag;
        $tag->save();

        return redirect('backend.travel_tips.tags.list-tags');
    }

    function show()
    {
        return view('backend.travel_tips.tags.edit-tags');
    }
}
