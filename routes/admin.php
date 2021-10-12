<?php

use Illuminate\Support\Facades\Route;


Route::group(['namespace'=> 'dashboard' , 'middleware' => 'auth:admin', 'prefix'=>'admin'],function(){

});
