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
        $book = DB::table('bookings as b')
        ->join('tour_packages as tp','tp.id_tour','b.id_tour')
        ->join('users as u','u.id_user','b.id_user')
        ->select('b.id_booking','tp.tour_name','b.booking_date','b.travel_date','u.firstname','u.lastname','b.pax','b.status')
        ->orderBy('b.id_booking', 'desc')
        ->get();
        return view('backend.transaction.booking.list-booking' , ['bookings' => $book]);
    }
     
  
}
