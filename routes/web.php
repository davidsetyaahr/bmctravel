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

<<<<<<< HEAD
Route::get('admin', 'AdminController@index');
Route::get('/', 'frontend\Home@index');
=======
Route::get('/', 'frontend\Home@index');
Route::get('/about', 'frontend\About@index');
Route::get('/tour-package', 'frontend\TourPackage@index');
Route::get('/destinations', 'frontend\Destination@index');
Route::get('/travel-tips', 'frontend\TravelTips@index');
Route::get('/signin', 'frontend\SignIn@index');
>>>>>>> master
