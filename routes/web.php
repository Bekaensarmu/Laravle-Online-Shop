<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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





 Route::get('/', '\App\Http\Controllers\HomeController@index')->name("home.index");

 Route::get('about', '\App\Http\Controllers\HomeController@about')->name("home.about");

 Route::get('/products', '\App\Http\Controllers\ProductController@index')->name("product.index");

 Route::get('/products/{id}', '\App\Http\Controllers\ProductController@show')->name("product.show");

Route::middleware('admin')->prefix('/admin')->group(function () {

   Route::get('/', '\App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");

   Route::get('/products', '\App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");

   Route::post('/products/store', '\App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");

   Route::get('/products/create', '\App\Http\Controllers\Admin\AdminProductController@create')->name("admin.product.create");

   Route::delete('/products/{id}/delete', '\App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");

   Route::get('/products/{id}/edit', '\App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");

Route::put('/products/{id}/update', '\App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");

});

Auth::routes();


