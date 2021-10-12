<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login','api\UserController@login');

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    Route::apiResource('productapi', 'Api\ProductController');
    Route::apiResource('userapi','Api\UserController');
});
Route::get('/product',function(){
    return 'product';
});

Route::get('productapi',[ProductController::class, 'index']);
Route::apiResource('productapi', 'Api\ProductController');
Route::apiResource('userapi','Api\UserController');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// // Route::apiResource('productapi','api/ProductController');
// Route::apiResource('productapi',[App\Http\Controllers\Api\ProductController::class, 'index']);

// Route::get('userapi', 'UserController@userapi');
// Route::post('storeapi', 'UserController@storeapi');

