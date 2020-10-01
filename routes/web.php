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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'App\Http\Controllers\HomeController@index');

// if (Auth::check())
// {
//     return 'fenil';
//     Route::get('/', 'App\Http\Controllers\PostController@index');
// } else {
//     Route::get('/', 'App\Http\Controllers\HomeController@index');
// }

Route::resource('posts', 'App\Http\Controllers\PostController');