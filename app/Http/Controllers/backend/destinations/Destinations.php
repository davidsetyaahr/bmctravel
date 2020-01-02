<?php

namespace App\Http\Controllers\backend\destinations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use \App\Destination;
use \App\City_model;
use \App\Gallery_model;
use \App\Gallery_categories_model;
use \App\Destination_categories;

class Destinations extends Controller
{
    function index()
    {
        $destination = DB::table('destinations')
        ->join('gallery','gallery.id_gallery','destinations.id_gallery')
        ->join('destination_categories','destination_categories.id_category','destinations.id_category')
        ->join('city','city.id_city','destinations.id_city')
        ->select('destinations.id_destination','destinations.destination_name','destination_categories.category_name'
        ,'city.city_name','destinations.id_gallery','gallery.img','destinations.overview','destinations.map'
        ,'destinations.information')
        ->orderBy('id_destination', 'desc')
        ->get();
        return view('backend.destinations.destinations.list', ['destinations' => $destination]);
        /*
        $destination = Destination::all();
        return view('backend.destinations.destinations.list', ['destinations' => $destination]);
        */
    }
    function create()
    {
        $gallery = Gallery_model::all();
        $gallery_categories = Gallery_categories_model::all();
        $categories = Destination_categories::all(['id_category','category_name']);
        $city = City_model::all(['id_city','city_name']);
        return view('backend.destinations.destinations.add-destination',['gallery' => $gallery, 'categories' => $gallery_categories, 'destination_categories' => $categories, 'city' => $city]);
    }
    function store(Request $request)
    {
        $request->validate([
            'destination_name' => 'required',
            'id_category' => 'required',
            'id_city' => 'required',
            'overview' => 'required',
            'map' => 'required',
            'information' => 'required',
        ]);

        // Destination::create([
            DB::table('destinations')->insert([
            'destination_name' => $request->destination_name,
            'id_category' => $request->id_category,
            'id_city' => $request->id_city,
            'id_gallery' => $request->id_gallery,
            'map' => $request->map,
            'information' => $request->information,
            'overview' => $request->overview


        ]);

         return redirect('/admin/destinations/destinations/list')->with('status', 'Destinasi berhasil ditambahkan');
    }
    public function edit($id)
        {
            $gallery = Gallery_model::all();
            $gallery_categories = Gallery_categories_model::all();
            $categories = Destination_categories::all(['id_category','category_name']);
            $city = City_model::all(['id_city','city_name']);
            $destination = DB::table('destinations')->where('id_destination',$id)->get();
            return view('backend.destinations.destinations.edit-destinations',['gallery' => $gallery, 'categories' => $gallery_categories,'destination_categories' => $categories,'city' => $city,'destinations' => $destination]);
        }
        public function update(Request $request)
        {

            DB::table('destinations')->where('id_destination',$request->id)->update([
                'destination_name' => $request->destination_name,
                'id_category' => $request->id_category,
                'id_city' => $request->id_city,
                'id_gallery' => $request->id_gallery,
                'map' => $request->map,
                'information' => $request->information,
                'overview' => $request->overview
            ]);
            return redirect('/admin/destinations/destinations/list')->with('status', 'Destinasi berhasil diupdate');

        }
}
