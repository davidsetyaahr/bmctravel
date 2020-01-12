<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use \App\Calculation_model;

class Calculation extends Controller
{
    public function detail($id)
    {
        
        $lbl = Calculation_model::all();
        $book = DB::table('bookings')->where('id_booking',$id)
        ->join('tour_packages','tour_packages.id_tour','bookings.id_tour')
        ->join('users','users.id_user','bookings.id_user')
        ->join("tour_durations as td","tour_packages.id_duration","td.id_duration")
        ->select('bookings.id_booking','tour_packages.tour_name','bookings.booking_date','bookings.travel_date','users.email','bookings.pax','bookings.price','bookings.identity_card','bookings.status',"td.day","td.night")
        ->orderBy('id_booking', 'desc')
        ->get();
        return view('backend/calculation/calculation' , ['bookings' => $book,'calculation' => $lbl]);
    }
    
    public function newcalc()
    {
        $lbl = Calculation_model::all();
        return view('backend/calculation/loop-calculation' , ['calculation' => $lbl,'id' => $_GET['id']]);
    }
    public function show()
    {
        echo "<pre>";
        print_r($_POST);
    }
}
