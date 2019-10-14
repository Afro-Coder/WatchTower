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
    return view('landing');
})->middleware('auth');

Auth::routes();

Route::get('/apitoken','ApiTokenGenerator@index')->name('apitokengenerate')->middleware('auth');
// Route::get('/landing', function () {
//     return view('landing');
// });

// Route::get('/home', 'HomeController@index')->name('home');
