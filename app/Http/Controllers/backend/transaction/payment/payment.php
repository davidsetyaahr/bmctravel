<?php

namespace App\Http\Controllers\backend\transaction\payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Payment_models;

class Payment extends Controller
{
    function index()
    {
        $pymnt = DB::table('payment')


        ->join('bookings','bookings.id_booking','payment.id_booking')
        ->select('payment.id_payment','bookings.identity_card','payment.nominal','bookings.price','payment.payment_date','payment.attachment')
        ->orderBy('id_payment', 'desc')
        ->get();
        return view('backend.transaction.payment.list-payment' , ['payment' => $pymnt]);
    }

     
  
}
