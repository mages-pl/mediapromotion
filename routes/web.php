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

// Route::get('/', function () {
//     return redirect('/home');
// });

Route::get('/kontakt','PagesController@kontakt');
Route::get('/integracja','PagesController@integracja');
Route::get('/platnosci','PagesController@platnosci');
Route::get('/statystyki','PagesController@statystyki');

/*
Warstwa pośrednicząca middleware
*/

Route::group(['middleware'=>['web']],function() {
/*
Route::get('/sklepy','ShopsController@index');
Route::post('sklepy','ShopsController@save');
Route::get('/sklepy/utworz','ShopsController@create');
Route::get('/sklepy/{id}','ShopsController@show');
*/

Route::resource("sklepy","ShopsController");
Route::resource("promocje","PromotionsController");
Route::resource("settings","SettingsController");
Route::resource("products","ProductsController");
Route::resource("invoices","InvoicesController");


Route::get('list','ProductsController@productslist');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

});



