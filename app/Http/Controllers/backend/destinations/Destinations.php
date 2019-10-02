<?php

namespace App\Http\Controllers\backend\destinations;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Destination;

class Destinations extends Controller
{
    function index()
    {
        $destination = Destination::all();
        return view('backend.destinations.destinations.list', ['destinations' => $destination]);
    }
    function add()
    {
        return view('backend.destinations.destinations.add-destination');
    }
    function insert(Request $resquest)
    {
        $this->validate($resquest,[
            'Destination Name' => 'required',
            'Category' => 'required',
            'City' => 'required',
            'Gallery' => 'required',
            'Overview' => 'required',
            'Map' => 'required',
            'Information' => 'required'
        ]);
        Destination::create([
            'destination_name' => $resquest->destination_name, 
            'id_category' => $resquest->id_category,
            'id_city' => $resquest->id_city,
            'gallery' => $resquest->gallery,
            'overview' => $resquest->overview,
            'map' => $resquest->map,
            'information' => $resquest->information
        ]);
        
        // return redirect('/list');
    }
}
