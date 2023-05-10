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
Route::get('/select_par_cat/{name}','App\Http\Controllers\ClientController@select_par_cat');


/* -----------------------Partie Admin----------------------- */
Route::get('/dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/commandes','App\Http\Controllers\AdminController@commandes');


/* -----------------------Partie Base de donnés----------------------- */


Route::get('/ajoutercategorie','App\Http\Controllers\CategorieController@ajoutercategorie');
Route::post('/sauvercategorie','App\Http\Controllers\CategorieController@sauvercategorie');
Route::get('/categories','App\Http\Controllers\CategorieController@categories');
Route::get('editer_categorie/{id}','App\Http\Controllers\CategorieController@editer_categorie');
Route::post('/modifiercategorie','App\Http\Controllers\CategorieController@modifiercategorie');
Route::get('/supprimercategorie/{id}', 'App\Http\Controllers\CategorieController@supprimercategorie');


Route::get('/ajouterproduit','App\Http\Controllers\ProductController@ajouterproduit');
Route::post('/sauverproduit','App\Http\Controllers\ProductController@sauverproduit');
Route::get('/produits','App\Http\Controllers\ProductController@produits');
Route::get('/editer_produit/{id}','App\Http\Controllers\ProductController@editerproduit');
Route::post('/modifierproduit','App\Http\Controllers\ProductController@modifierproduit');
Route::get('/supprimerproduit/{id}','App\Http\Controllers\ProductController@supprimerproduit');
Route::get('/activer_produit/{id}','App\Http\Controllers\ProductController@activerproduit');
Route::get('/desactiver_produit/{id}','App\Http\Controllers\ProductController@desactiverproduit');




Route::get('/ajouterslider', 'App\Http\Controllers\SliderController@ajouterslider');
Route::get('/sliders','App\Http\Controllers\SliderController@sliders');
Route::post('/sauverslider','App\Http\Controllers\SliderController@sauverslider');
Route::get('/editer_slider/{id}','App\Http\Controllers\SliderController@editer_slider');
Route::post('/modifier_slider', 'App\Http\Controllers\SliderController@modifierslider');
Route::get('/supprimerslider/{id}','App\Http\Controllers\SliderController@supprimerslider');
Route::get('/desactiver_slider/{id}', 'App\Http\Controllers\SliderController@desactiver_slider');
Route::get('/activer_slider/{id}','App\Http\Controllers\SliderController@activer_slider' );