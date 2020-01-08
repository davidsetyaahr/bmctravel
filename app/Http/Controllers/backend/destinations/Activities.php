<?php

namespace App\Http\Controllers\backend\destinations;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use \App\Activities_model;

class Activities extends Controller
{
    function index(){
        // $activities = DB::table('trip_activities');
        $activities = Activities_model::orderBy('id_activities', 'ASC')->get();
        return view('backend.destinations.trip-activities.list-activities', ['trip_activities' => $activities]);
    }

    function create()
    {
        return view('backend.destinations.trip-activities.add-activities');
    }

    function store(Request $request)
    {
        $request->validate([
            'activities' => 'required'
        ]);
        DB::table('trip_activities')->insert([
            'activities' => $request->activities
        ]);
        return redirect('/admin/destinations/activities')->with('status','Aktivitas berhasil ditambahkan');
    }
}
