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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('products', 'ProductController@index')->name('product.index');
Route::get('products/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::get('products/create', 'ProductController@create')->name('product.create');

Route::post('products', 'ProductController@store')->name('product.store');
Route::put('products/{product}', 'ProductController@update')->name('product.update');
Route::delete('products/{product}', 'ProductController@destroy')->name('product.destroy');
