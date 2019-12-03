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

Route::get('/', 'MainController@getProducts')->name('product_all');
Route::get('/category/{id}', 'MainController@getProductsByCategory')->name('products_by_category');

Route::get('/posts', 'PostController@getPosts')->name('posts_all');
Route::get('/posts/{id}', 'PostController@getPost')->name('post_get');


Route::get('/product/{id}/buy', 'BuyController@addToBuy')->name('product_buy');
