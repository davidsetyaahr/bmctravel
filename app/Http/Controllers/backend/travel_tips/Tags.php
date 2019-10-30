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
        $tag = Tags_model::all();
        return view('backend.travel_tips.tags.list-tags' , ['id_tag' => $tag]);
    }

    function add()
    {
        return view('backend.travel_tips.tags.add-tags');
    }

    function store(Request $request)
    {
                //validasi
                $request->validate([
                    'tag_name' => 'required'
                ]);
                // insert
                DB::table('tags')->insert([
                'tag_name' => $request->tag_name
                ]);
        return redirect('/admin/travel-tips/tags')->with('status', 'Tags berhasil ditambahkan');
    }

    function edit($id)
    {
        $tag = DB::table('tags')->where('id_tag',$id)->get();
        return view('backend.travel_tips.tags.edit-tags' , ['id_tag' => $tag]);
    }

    function update(Request $request)
    {
        $request->validate([
            'tag_name' => 'required'
        ]);

        DB::table('tags')->where('id_tag',$request->id)->update([
            'tag_name' => $request->tag_name
        ]);
        return redirect('/admin/travel-tips/tags')->with('status', 'Tags berhasil diperbarui');
    }
}
