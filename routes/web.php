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
Route::get('/admin/logout', 'backend\Admin@logout');
Route::get('/admin/dashboard', 'backend\Admin@dashboard');
Route::get('/admin/tour-package/information', 'backend\tour_package\Information@index');
Route::get('/admin/tour-package/information/add-information', 'backend\tour_package\Information@add');
Route::post('/admin/tour-package/information/add-information', 'backend\tour_package\Information@store');
Route::get('/admin/tour-package/informations/edit-information/{id}', 'backend\tour_package\Information@edit');
Route::post('/admin/tour-package/informations/update', 'backend\tour_package\Information@update');
Route::get('/admin/tour-package/tour-package', 'backend\tour_package\TourPackage@index');
Route::get('/admin/tour-package/add-tour-package', 'backend\tour_package\TourPackage@add');
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
Route::get('/admin/destinations/activities', 'backend\destinations\Activities@index');
Route::get('/admin/destinations/add-activities', 'backend\destinations\Activities@create');
Route::post('/admin/destinations/add-activities', 'backend\destinations\Activities@store');
Route::get('/admin/gallery/gallery','backend\gallery\Gallery@index');
Route::post('/admin/gallery/add-gallery','backend\gallery\Gallery@store');
Route::get('/admin/gallery/add-gallery','backend\gallery\Gallery@add');
Route::get('/admin/gallery/categories','backend\gallery\Categories@index');
Route::get('/admin/gallery/add-categories-gallery','backend\gallery\Categories@add');
Route::post('/admin/gallery/add-categories-gallery','backend\gallery\Categories@store');
Route::post('/admin/gallery/categories/update','backend\gallery\Categories@update');
Route::get('/admin/gallery/edit-categories-gallery/{id}','backend\gallery\Categories@edit');

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
Route::get('/admin/gallery/edit-gallery/update', 'backend\gallery\Gallery@update');
Route::get('/admin/hotel/edit-hotel/{id}', 'backend\hotel\Hotel@edit');
Route::get('/admin/destinations/edit-categories/{id}', 'backend\destinations\Categories@edit');
Route::post('/admin/tour-package/price-categories/update','backend\tour_package\PriceCategories@update');
Route::post('/admin/destinations/categories/update','backend\destinations\Categories@update');
Route::post('/admin/hotel/update','backend\hotel\Hotel@update');
Route::get('/admin/data-master/edit-province/{id}','backend\data_master\Province@edit');
Route::/*method dari form*/post(/* url */'/admin/data-master/update-province',/*controller*/'backend\data_master\Province@update');
Route::get('/admin/destinations/destinations/edit-categories/{id}', 'backend\destinations\Destinations@edit');
Route::post('/admin/destinations/destinations/update', 'backend\destinations\Destinations@update');
Route::get('/travel-tips/detail-travel/{id}', 'frontend\TravelTips@detail');
Route::get('/admin/destinations/destinations/edit-categories/{id}', 'backend\destinations\Destinations@edit');
Route::post('/admin/destinations/destinations/update', 'backend\destinations\Destinations@update');
Route::get('/travel-tips/detail-travel', 'frontend\TravelTips@detail');
Route::get('/admin/data-master/edit-city/{id}', 'backend\data_master\City@edit');
Route::post('/admin/data-master/update', 'backend\data_master\City@update');
Route::get('/admin/travel-tips/travel-tips/edit-travel-tips/{id}', 'backend\travel_tips\TravelTips@edit');
Route::post('/admin/travel-tips/travel-tips/update', 'backend\travel_tips\TravelTips@update');
Route::post('/admin/tour-package/add-durations', 'backend\tour_package\Durations@insert');
Route::get('/admin/tour-package/edit-durations/{id}', 'backend\tour_package\Durations@edit');
Route::post('/admin/tour-package/durations/update','backend\tour_package\Durations@update');
Route::get('/signup', 'frontend\Signin@signup');
Route::get('/admin/hotel/room-hotel','backend\room_hotel\Room@index');
Route::get('/admin/room-hotel/add-room-hotel','backend\room_hotel\Room@create');
Route::post('/admin/room-hotel/add-room-hotel','backend\room_hotel\Room@store');
Route::get('/admin/room-hotel/edit-room-hotel/{id}', 'backend\room_hotel\Room@edit');
Route::post('/admin/room-hotel/update', 'backend\room_hotel\Room@update');
Route::post('/admin/tour-package/stepbystep', 'backend\tour_package\TourPackage@stepbystep');
Route::post('/signup/auth', 'frontend\Signin@register');
Route::get('/admin/transaction/booking/list-booking','backend\transaction\booking\book@index');
Route::get('/admin/transaction/payment/list-payment','backend\transaction\payment\payment@index');
Route::post('/signin/auth', 'frontend\Signin@authLogin');
Route::get('/tour-package/booking/{id}', 'frontend\TourPackage@booking');
Route::get('/tour-package/attach', 'frontend\TourPackage@attach');
Route::get('/admin/calculation/{id}', 'backend\Calculation@index');
Route::get('/my-account', 'frontend\MyAccount@index');
Route::get('/my-account/notifacation', 'frontend\MyAccount@setting');
Route::get('/admin/tour-package/getKodeHotel', 'backend\tour_package\TourPackage@kodehotel');
Route::get('/admin/gallery/bycategory', 'backend\gallery\Gallery@bycategory');
Route::get('/admin/tour-package/newtrip', 'backend\tour_package\TourPackage@newtrip');
Route::get('/my-account/notification', 'frontend\MyAccount@notification');
Route::get('/my-account/booking', 'frontend\MyAccount@booking');
Route::get('/admin/tour-package/getKodeHotel', 'backend\tour_package\TourPackage@kodehotel');
Route::get('/admin/tour-package/gethotel', 'backend\tour_package\TourPackage@gethotel');
