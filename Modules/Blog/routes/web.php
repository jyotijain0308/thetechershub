<?php

use Illuminate\Support\Facades\Route;
use Modules\Blog\Http\Controllers\ArticleController;

/*
|--------------------------------------------------------------------------
| Blog Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your module. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

ladmin()->route(function () {
    Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
        Route::get('/', function () {
            return view('blog::welcome');
        })->name('home');
    });
    Route::resource('article', ArticleController::class);
});

/**
 * All routes listed here, can be accessed
 * outside the Administrator page
 * * http://localhost:8000/blog
 */
Route::group(['prefix' => 'blog', 'as' => 'blog.'], function () {
    Route::get('/', function () {
        return 'Welcome to Blog Module';
    })->name('blog');
});
