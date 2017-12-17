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
Filtrowanie routingu
*/

// Route::filter('restriction',function($route) {
// $setting_id = $route->parameter('settings');

// if(!Auth::user()->setting()->find($setting_id)) { 
//     return Redirect::to('/');
// }
// });
  

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

Route::resource("shops","ShopsController");
Route::resource("promotions","PromotionsController");
Route::resource("settings","SettingsController",array('before' => 'restrictPermission'));
Route::resource("products","ProductsController");
Route::resource("invoices","InvoicesController");
Route::resource("brands","BrandsController");
Route::resource("categories","CategoriesController");
Route::resource("sliders","SlidersController");
Route::resource('users','UsersController');

Route::get('integrates/process','IntegratesController@process');
//Route::resource("menu","TopMenusController");

 

Route::get('integrates/list','IntegratesController@index');


// Route::get('integrates',[
// 'integrates' => 'IntegratesController@index',
// 'as' => 'integrates.index'
// ]);

Route::get('customersmanage','SettingsController@customersmanage');
Route::get('productsmanage','ProductsController@productsmanage');
Route::get('shopsmanage','ShopsController@shopsmanage');
Route::get('promotionsmanage','PromotionsController@promotionsmanage');
Route::get('usersmanage','UsersController@usersmanage');
Route::get('invoicesmanage','InvoicesController@invoicesmanage');
Route::get('categorieslist','CategoriesController@categorieslist');
Route::get('products-list','ProductsController@productslist');
Route::get('promotions-list','PromotionsController@promotionslist');


Route::get('invoices-download',"InvoicesController@download");

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::get('/', 'TopMenusController@index');

});



