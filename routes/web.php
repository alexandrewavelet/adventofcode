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
})->name('welcome');

Route::prefix('days')->name('days.')->group(function () {
    Route::get('1', 'DaysController@one')->name('one');
    Route::get('2', 'DaysController@two')->name('two');
});
