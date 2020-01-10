<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bookings;
use App\Users;

class MyAccount extends Controller
{
    public function index()
    {
        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution"
        );
        $profile = DB::table('users')->get();
        return view('frontend.myAccount.profile',['users' => $profile], $attr);
    }

    public function notification()
    {
        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution"
        );
        return view('frontend.myAccount.notifications', $attr);
    }

    public function booking()
    {
        $attr = array(
            "title" => "BMC Travel Service - My Account",
            "desc" => "Welcome to BMC Travel Service. One Stop Travel Solution"
        );
        $book = DB::table('bookings')


        ->join('tour_packages','tour_packages.id_tour','bookings.id_tour')
        ->join('users','users.id_user','bookings.id_user')
        ->select('bookings.id_booking','tour_packages.tour_name','bookings.booking_date','bookings.travel_date','users.email','bookings.pax','bookings.price','bookings.identity_card','bookings.status')
        ->orderBy('id_booking', 'desc')
        ->get();

        return view('frontend.myAccount.booking', ['bookings' => $book] ,$attr);
    }

}








