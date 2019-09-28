<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/admin', 'backend\Admin@index');
Route::get('/admin/tour-package/tour-package', 'backend\tour_package\TourPackage@index');
Route::get('/admin/tour-package/categories', 'backend\tour_package\Categories@index');
Route::get('/admin/tour-package/durations', 'backend\tour_package\Durations@index');
Route::get('/admin/tour-package/price-categories', 'backend\tour_package\PriceCategories@index');
Route::get('/admin/tour-package/tour-type', 'backend\tour_package\TourType@index');
Route::get('/admin/destinations/destinations','backend\destinations\Destinations@index');
Route::get('/admin/destinations/categories','backend\destinations\Categories@index');
Route::get('/admin/gallery/gallery','backend\gallery\Gallery@index');
Route::get('/admin/gallery/categories','backend\gallery\Categories@index');
Route::get('/admin/hotel/hotel','backend\hotel\Hotel@index');
Route::get('/admin/travel-tips/travel-tips','backend\travel_tips\TravelTips@index');
Route::get('/admin/travel-tips/tags','backend\travel_tips\Tags@index');
Route::get('/admin/users/user','backend\users\User@index');
Route::get('/admin/data-master/province','backend\data_master\Province@index');
Route::get('/admin/data-master/city','backend\data_master\City@index');
Route::get('/', 'frontend\Home@index');
Route::get('/about', 'frontend\About@index');
Route::get('/tour-package', 'frontend\TourPackage@index');
Route::get('/destinations', 'frontend\Destination@index');
Route::get('/travel-tips', 'frontend\TravelTips@index');
Route::get('/signin', 'frontend\SignIn@index');
