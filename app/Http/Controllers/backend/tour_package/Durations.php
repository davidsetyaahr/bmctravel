<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

use App\Tour_durations;

class Durations extends Controller
{
    function index()
    {
        
        $dura = Tour_durations::orderBy('id_duration', 'DESC')->get();
        return view('backend.tour_package.durations.list-durations', ['tour_durations' => $dura]);
    }
    function add(){
        return view('backend.tour_package.durations.add-durations');
    }
    function insert(Request $request){
        $request->validate([
            'day' => 'digits_between:1,2',
            'night' => 'digits_between:1,2'
        ]);
        //  $rules = ['day' => 'numeric|min:1|max:2', 'night' => 'numeric|min:1|max:2'];
        // insert
        DB::table('tour_durations')->insert([
            'day' => $request->day,
            'night' => $request->night
            ]);
            return redirect('admin/tour-package/durations')->with('status', 'Duration berhasil ditambah');

        }
    public function edit($id)
    {
        $dura = DB::table('tour_durations')->where('id_duration', $id)->get();
        return view('backend.tour_package.durations.edit-durations', ['tour_durations' => $dura]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'day' => 'digits_between:1',
            'night' => 'digits_between:1,2'
        ]);

        DB::table('tour_durations')->where('id_duration',$request->id)->update([
            'day' => $request->day,
            "night" => $request->night
        ]);
        return redirect('/admin/tour-package/durations')->with('status', 'Update berhasil');
    }
}

