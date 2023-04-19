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
/* -----------------------Partie Client----------------------- */

Route::get('/home','App\Http\Controllers\ClientController@home');
Route::get('/apropos','App\Http\Controllers\ClientController@apropos');
Route::get('/boutique','App\Http\Controllers\ClientController@boutique');
Route::get('/contact','App\Http\Controllers\ClientController@contact');
Route::get('/special','App\Http\Controllers\ClientController@special');
Route::get('/logi','App\Http\Controllers\ClientController@login');
Route::get('/singnup','App\Http\Controllers\ClientController@singnup');
Route::get('/paiement','App\Http\Controllers\ClientController@paiement');


/* -----------------------Partie Admin----------------------- */
Route::get('/dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/commandes','App\Http\Controllers\AdminController@commandes');


/* -----------------------Partie Base de donnés----------------------- */


Route::get('/ajoutercategorie','App\Http\Controllers\CategorieController@ajoutercategorie');
Route::post('/sauvercategorie','App\Http\Controllers\CategorieController@sauvercategorie');
Route::get('/categories','App\Http\Controllers\CategorieController@categories');


Route::get('/ajouterproduit','App\Http\Controllers\ProductController@ajouterproduit');
Route::post('/sauverproduit','App\Http\Controllers\ProductController@sauverproduit');
Route::get('/produits','App\Http\Controllers\ProductController@produits');


Route::get('/ajouterslider', 'App\Http\Controllers\SliderController@ajouterslider');
Route::post('/sauverslider','App\Http\Controllers\SliderController@sauverslider');
Route::get('/sliders','App\Http\Controllers\SliderController@sliders');