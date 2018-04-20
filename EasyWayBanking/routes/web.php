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

Route::get('/', function () {
    return View::make('pages.index');
});


Route::get('careers', function(){
    return view('pages.careers');
});

Route::get('signing', function(){
    return view('pages.signing');
});

Route::get('signup', function(){
    return view('pages.signup');
});
Route::get('reset-password', function(){
    return view('pages.reset-password');
});
Route::get('personal-loan', function(){
    return view('pages.personal-loan');
});
Route::get('business-loan', function(){
    return view('pages.business-loan');
});
Route::get('request-appointment', function(){
    return view('pages.request-appointment');
});
Route::resource('careers','CareersController');