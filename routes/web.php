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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home','App\Http\Controllers\ClientController@home');
Route::get('/apropos','App\Http\Controllers\ClientController@apropos');
Route::get('/boutique','App\Http\Controllers\ClientController@boutique');
Route::get('/contact','App\Http\Controllers\ClientController@contact');
Route::get('/special','App\Http\Controllers\ClientController@special');
Route::get('/logi','App\Http\Controllers\ClientController@login');
Route::get('/singnup','App\Http\Controllers\ClientController@singnup');
Route::get('/paiement','App\Http\Controllers\ClientController@paiement');
Route::get('/dashboard','App\Http\Controllers\AdminController@dashboard');
