<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourPackage extends Controller
{
    public function index()
    {
        $attr = array(
            "title" => "BMC Travel Service - Travel Package",
            "desc" => "Our awesome travel package"
        );

        return view('frontend.tour-package.list-tour-package', $attr);
    }
    public function detail($id)
    {
        $attr = array(
            "title" => "BMC Travel Service - Travel Package",
            "desc" => "Our awesome travel package"
        );

        return view('frontend.tour-package.detail-tour-package', $attr);
    }
    public function booking($id)
    {
            $attr = array(
                "title" => "BMC Travel Service - Travel Package",
                "desc" => "Our awesome travel package"
            );
    
            return view('frontend.booking.step1', $attr);
    }
}
