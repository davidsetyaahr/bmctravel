<?php

namespace App\Http\Controllers\backend\tour_package;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Gallery_model;
use \App\Gallery_categories_model;
use \App\Tour_categories;
use \App\Tour_Durations;
use \App\Tour_type;

class TourPackage extends Controller
{
    function index()
    {
        return view('backend.tour_package.tour_package.list');
    }
    function add()
    {
        $gallery = Gallery_model::orderBy("id_gallery","desc")->get();
        $gallery_categories = Gallery_categories_model::orderBy("id_category","desc")->get();
        $category = Tour_categories::orderBy("id_category","desc")->get();
        $categoryAll = Tour_categories::orderBy("id_category","desc")->get();
        $durations = Tour_durations::orderBy("id_duration","desc")->get();
        $type = Tour_type::all();

        $param = array(
            "gallery" => $gallery,
            "categories" => $gallery_categories,
            "tour_categories" => $category,
            "durations" => $durations,
            "type" => $type
        );
        return view('backend.tour_package.tour_package.add-tour-package', $param);
    }

    function stepbystep(Request $request)
    {
        if ($request->step == '1')
        {
            $array = array(
                'id_tour' => $request->id_tour,
                'tour_name' => $request->tour_name,
                'id_category' => $request->id_category,
                'id_type' => $request->id_type,
                'id_duration' => $request->id_duration,
                'overview' => $request->overview,
                'id_gallery' => $request->id_gallery
            );
            $request->session()->put($array);
            return redirect('/admin/tour-package/add-tour-package?page=2');
        }

        // else if ($request->step =='2')
        // {
        //     $_SESSION['add_package']['step2']=array(
        //         'id_tour' => $request->id_tour,
        //         'tour_name' => $request->tour_name,
        //         'id_category' => $request->id_category,
        //         'id_type' => $request->id_type,
        //         'id_duration' => $request->id_duration,
        //         'overview' => $request->overview,
        //         'id_gallery' => $request->id_gallery
        //     );
        //     print_r($_SESSION['add_package1']);
        //     return view('backend.tour_package.tour_package.add-package2', $request);
        //}
    }
}
