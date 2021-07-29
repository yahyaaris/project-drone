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

Route::get('/create-flight-plan', function (){
    return view('create-flight-plan');
});

Route::get('/flight-status', function (){
    return view('flight-status');
});

Route::get('/feed', function (){
    return view('feed');
});

Route::get('/drone', function (){
    return view('drone');
});


