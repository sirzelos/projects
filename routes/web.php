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


Route::post('/testdb','ProductsController@index');

Route::get('/carts', function () {
        return view('carts.items');
});
Route::get('/accounts', 'AccountsController@index')->name('accounts')->middleware('auth');
Route::get('/myOrders', 'MyOrdersController@index')->name('myOrders')->middleware('auth');
Route::get('/trackOrders', 'TrackOrderController@index')->name('trackOrders')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


Route::get('/LoginHomes', 'LoginHomesController@index')->name('LoginHomes')->middleware('auth');

Route::get('/LoginProducts', 'LoginProductsController@index')->name('LoginProducts')->middleware('auth');;

Route::get('/LoginPayments', 'LoginPaymentsController@index')->name('LoginPayments')->middleware('auth');

Route::resource('/products','ProductsController');

Route::resource('/pays', 'PaysController')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','UsersController@profile')->name('profile');
Route::get('/profile/edit','UsersController@edit')->name('edit');
Route::resource('/profile','UsersController');
