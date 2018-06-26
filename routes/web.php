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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/profile', 'userController@profile');
Route::get('/deslogear', 'userController@deslogear');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/faq', 'FaqController@index')->name('faq');
Route::get('/products', 'ProductsController@index')->name('index');
Route::get('/products-admin', 'ProductsAdminController@index')->name('index');
Route::post('/products-admin', 'ProductsAdminController@save')->name('save');
Route::get('/products-admin/{id}', 'ProductsAdminController@deletePro')->name('delete');

Auth::routes();
