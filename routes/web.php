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
Route::get("/","ProductsController@home");
Route::get("/shop","ProductsController@shop");
Route::get("/learn","ProductsController@learn");
Route::get("/search","ProductsController@search");
Route::post("/showModel","ProductsController@showModel");

Route::get('/myadmin', 'AdminController@login')->name("adminLogin");
Route::post('/myadmin', 'AdminController@loginPost');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function(){

Route::get('/myadmin/logout', 'AdminController@logout');

Route::get('/users', 'AdminController@index');
Route::get('/user/create', 'AdminController@create');
Route::post('/user/store', 'AdminController@store');
Route::get('/user/edit/{email}', 'AdminController@edit');
Route::post('/user/update', 'AdminController@update');
Route::get('/user/destroy/{email}', 'AdminController@destroy');

Route::get('/products', 'ProductsController@index');
Route::get('/product/create', 'ProductsController@create');
Route::post('/product/store', 'ProductsController@store');
Route::get('/product/edit/{productId}', 'ProductsController@edit');
Route::post('/product/update', 'ProductsController@update');
Route::get('/product/destroy/{productId}', 'ProductsController@destroy');
Route::post('/products/updatePosition', 'ProductsController@updatePosition');
Route::post('/products/searchProduct', 'ProductsController@searchProduct');

Route::get('/categories', 'CategoriesController@index');
Route::get('/categorie/create', 'CategoriesController@create');
Route::post('/categorie/store', 'CategoriesController@store');
Route::get('/categorie/edit/{categorieId}', 'CategoriesController@edit');
Route::post('/categorie/update', 'CategoriesController@update');
Route::get('/categorie/destroy/{categorieId}', 'CategoriesController@destroy');
Route::post('/categories/updatePosition', 'CategoriesController@updatePosition');
});