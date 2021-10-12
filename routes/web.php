<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Route::get('/shop','ProductController@productPage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user','UserController');
Route::resource('product','ProductController');
Route::resource('invoice','InvoiceController');
Route::resource('carts','CartController');
// Route::get('/product/{id}','ProductController@productPage')->name('product');
// Route::get('/{page}', 'AdminController@index');

/* amiiiiiiiiiiiiiiiiiiiiin */
//shop ProductController
Route::get('/productcart/{id}','ProductController@productcart');
// route for cart
Route::get('addCart/{id}','CartController@AddCart')->middleware('auth');
Route::get('cart','CartController@ShowCart')->middleware('auth');
// Route::get('chickcountcard','CartController@chickcountcard')->middleware('auth');
Route::get('checkout','CheckController@ShowCart')->middleware('auth');
Route::post('store','CheckController@store')->middleware('auth');
Route::get('search','ProductController@search');

