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

Route::get('/', 'App\Http\Controllers\MainController@home');
Route::get('/about', 'App\Http\Controllers\MainController@about');
Route::get('/offer', 'App\Http\Controllers\MainController@offer');
Route::post('/offer/check', 'App\Http\Controllers\MainController@offer_check');

//Route::get('/', 'MainController@home');
//Route::get('/about', 'MainController@about');

//Route::get('/', function () {
//    return view('home');
//});

//Route::get('/about/', function () {
//    return view('about');
//});

//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return " Id: ".$id." Name: ".$name;
//});
