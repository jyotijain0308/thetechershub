<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Service Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your module. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

ladmin()->route(function() {
    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::get('/', function () {
            return view('service::welcome');
        })->name('home');
    });
});
