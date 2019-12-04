<?php

namespace App\Http\Controllers\backend\transaction\booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bookings;

class Book extends Controller
{
    function index()
    {
        $book = DB::table('bookings')


        ->join('tour_packages','tour_packages.id_tour','bookings.id_tour')
        ->join('users','users.id_user','bookings.id_user')
        ->select('bookings.id_booking','tour_packages.tour_name','bookings.booking_date','bookings.travel_date','users.email','bookings.pax','bookings.price','bookings.identity_card','bookings.status')
        ->orderBy('id_booking', 'desc')
        ->get();
        return view('backend.transaction.booking.list-booking' , ['bookings' => $book]);
    }
     
  
}
