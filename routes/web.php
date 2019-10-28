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
Route::get('/admin', 'backend\Admin@login');
Route::post('/admin', 'backend\Admin@loginPost');
Route::get('/admin/dashboard', 'backend\Admin@dashboard');
Route::get('/admin/tour-package/tour-package', 'backend\tour_package\TourPackage@index');
Route::get('//admin/tour-package/add-tour-package', 'backend\tour_package\TourPackage@add');
Route::get('/admin/tour-package/categories', 'backend\tour_package\Categories@index');
Route::get('/admin/tour-package/add-categories', 'backend\tour_package\Categories@add');
Route::post('/admin/tour-package/add-categories', 'backend\tour_package\Categories@store');
Route::get('/admin/tour-package/edit-categories/{id}', 'backend\tour_package\Categories@edit');
Route::post('/admin/tour-package/categories/update', 'backend\tour_package\Categories@update');
Route::get('/admin/tour-package/durations', 'backend\tour_package\Durations@index');
Route::get('/admin/tour-package/add-durations', 'backend\tour_package\Durations@add');
Route::get('/admin/tour-package/price-categories', 'backend\tour_package\PriceCategories@index');
Route::get('/admin/tour-package/add-price-categories', 'backend\tour_package\PriceCategories@create');
Route::post('/admin/tour-package/add-price-categories', 'backend\tour_package\PriceCategories@store');
Route::get('/admin/tour-package/tour-type', 'backend\tour_package\TourType@index');
Route::get('/admin/tour-package/add-tour-type', 'backend\tour_package\TourType@add');
Route::get('/admin/tour-package/edit-tour-type/{id}', 'backend\tour_package\TourType@edit');
Route::post('/admin/tour-package/add-tour-type', 'backend\tour_package\TourType@store');
Route::post('/admin/tour-package/tour-type/update', 'backend\tour_package\TourType@update');

Route::get('/admin/destinations/destinations','backend\destinations\Destinations@index');
Route::get('/admin/destinations/destinations/list','backend\destinations\Destinations@index');
Route::get('/admin/destinations/destinations/add-destination','backend\destinations\Destinations@create');
Route::post('/admin/destinations/destinations/add-destination','backend\destinations\Destinations@store');
Route::get('/admin/destinations/categories','backend\destinations\Categories@index');
Route::get('/admin/destinations/add-categories', 'backend\destinations\Categories@create');
Route::post('/admin/destinations/add-categories', 'backend\destinations\Categories@store');
Route::get('/admin/gallery/gallery','backend\gallery\Gallery@index');
Route::post('/admin/gallery/add-gallery','backend\gallery\Gallery@store');
Route::get('/admin/gallery/add-gallery','backend\gallery\Gallery@add');
Route::get('/admin/gallery/categories','backend\gallery\Categories@index');
Route::get('/admin/gallery/add-categories-gallery','backend\gallery\Categories@add');
Route::post('/admin/gallery/add-categories-gallery','backend\gallery\Categories@store');
Route::get('/admin/hotel/hotel','backend\hotel\Hotel@index');
Route::get('/admin/travel-tips/travel-tips/list','backend\travel_tips\TravelTips@index');
Route::get('/admin/travel-tips/travel-tips/add-travel-tips','backend\travel_tips\TravelTips@create');
Route::post('/admin/travel-tips/travel-tips/add-travel-tips','backend\travel_tips\TravelTips@store');
Route::get('/admin/hotel/add-hotel','backend\hotel\Hotel@add');
Route::get('/admin/hotel/add-hotel','backend\hotel\Hotel@create');
Route::post('/admin/hotel/add-hotel', 'backend\hotel\Hotel@store');
Route::get('/admin/travel-tips/travel-tips','backend\travel_tips\TravelTips@index');
Route::post('/admin/travel-tips/add-tags','backend\travel_tips\Tags@store');
Route::get('/admin/travel-tips/edit-tags/{id}', 'backend\travel_tips\Tags@edit');
Route::get('/admin/travel-tips/tags','backend\travel_tips\Tags@index');
Route::post('/admin/travel-tips/tags/update', 'backend\travel_tips\Tags@update');
Route::get('/admin/travel-tips/add-tags','backend\travel_tips\Tags@add');
Route::get('/admin/travel-tips/edit-tags','backend\travel_tips\Tags@show');
Route::get('/admin/users/user','backend\users\User@index');
Route::get('/admin/users/add-user','backend\users\User@add');
Route::get('/admin/data-master/province','backend\data_master\Province@index');
Route::get('/admin/data-master/add-province','backend\data_master\Province@create');
Route::post('/admin/data-master/add-province','backend\data_master\Province@store');
Route::get('/admin/data-master/add-city','backend\data_master\City@add');
Route::post('/admin/data-master/add-city','backend\data_master\City@store');
Route::get('/admin/data-master/city','backend\data_master\City@index');
Route::get('/', 'frontend\Home@index');
Route::get('/about', 'frontend\About@index');
Route::get('/tour-package', 'frontend\TourPackage@index');
Route::get('/tour-package/detail-package/{id}', 'frontend\TourPackage@detail');
Route::get('/destinations', 'frontend\Destinations@index');
Route::get('/destinations/detail-destinations/{id}', 'frontend\Destinations@detail');
Route::get('/travel-tips', 'frontend\TravelTips@index');
Route::get('/signin', 'frontend\SignIn@index');
Route::get('/admin/tour-package/edit-price-categories/{id}', 'backend\tour_package\PriceCategories@edit');
Route::get('/admin/gallery/edit-gallery/{id}', 'backend\gallery\Gallery@edit');
Route::get('/admin/hotel/edit-hotel/{id}', 'backend\hotel\Hotel@edit');
Route::get('/admin/destinations/edit-categories/{id}', 'backend\destinations\Categories@edit');
Route::post('/admin/tour-package/price-categories/update','backend\tour_package\PriceCategories@update');
Route::post('/admin/destinations/categories/update','backend\destinations\Categories@update');
Route::post('/admin/hotel/update','backend\hotel\Hotel@update');
Route::get('/admin/data-master/edit-province/{id}','backend\data_master\Province@edit');
Route::/*method dari form*/post(/* url */'/admin/data-master/update-province',/*controller*/'backend\data_master\Province@update');
Route::get('/admin/destinations/destinations/edit-categories/{id}', 'backend\destinations\Destinations@edit');
Route::post('/admin/destinations/destinations/update', 'backend\destinations\Destinations@update');
Route::get('/travel-tips/detail-travel', 'frontend\TravelTips@detail');
Route::get('/admin/destinations/destinations/edit-categories/{id}', 'backend\destinations\Destinations@edit');
Route::post('/admin/destinations/destinations/update', 'backend\destinations\Destinations@update');
Route::get('/travel-tips/detail-travel', 'frontend\TravelTips@detail');
Route::get('/admin/travel-tips/travel-tips/edit-travel-tips/{id}', 'backend\travel_tips\TravelTips@edit');
Route::post('/admin/travel-tips/travel-tips/update', 'backend\travel_tips\TravelTips@update');
Route::post('/admin/tour-package/add-durations', 'backend\tour_package\Durations@insert');
Route::get('/admin/tour-package/edit-durations/{id}', 'backend\tour_package\Durations@edit');
Route::post('/admin/tour-package/durations/update','backend\tour_package\Durations@update');

