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

Route::get('/', 'ProductController@home')->name('home');
Route::get('/products', 'ProductController@viewProduct')->name('products');
Route::get('/product/edit/{id}', 'ProductController@editProduct')->name('edit-product');

Route::post('/product/store', 'ProductController@store')->name('store-product');
Route::patch('/product/update/{id}', 'ProductController@updateProduct')->name('update-product');
Route::delete('/product/delete/{id}', 'ProductController@deleteProduct')->name('delete-product');