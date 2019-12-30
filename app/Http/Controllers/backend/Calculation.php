<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use \App\Calculation_model;

class Calculation extends Controller
{
    public function index($id)
    {
        
        $lbl = Calculation_model::all();
        $book = DB::table('bookings')->where('id_booking',$id)


        ->join('tour_packages','tour_packages.id_tour','bookings.id_tour')
        ->join('users','users.id_user','bookings.id_user')
        ->select('bookings.id_booking','tour_packages.tour_name','bookings.booking_date','bookings.travel_date','users.email','bookings.pax','bookings.price','bookings.identity_card','bookings.status')
        ->orderBy('id_booking', 'desc')
        ->get();
        return view('backend/calculation/calculation' , ['bookings' => $book,'calculation' => $lbl]);
    }
}
