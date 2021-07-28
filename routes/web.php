<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function (){
    return view('home');
});

Route::get('/aboutus', function(){
    return view('aboutus');
});

Route::get('/contactus', function(){
    return view('contactus');
});

Route::get('/flight-plan', function (){
    return view('flight-plan.index');
});

Route::get('/flight-plan/create', function (){
    return view('flight-plan.create');
});


Route::get('/flight-status', function (){
    return view('flight-status.index');
});

Route::get('/feed', function (){
    return view('feed.index');
});

Route::get('/drone', function (){
    return view('drone.index');
});

Route::get('/drone/create', function (){
    return view('drone.create');
});

Route::get('/user', function (){
    return view('user.index');
});

Route::get('user/create', function (){
    return view('user.create');
});

Route::get('/signin', function (){
    return view('signin');
});

Route::get('/drone02', function (){
    return view('drone02');
});