<?php

use App\Record;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/second-buyer-eloquent', 'BuyerController@secondTopBuyerElo');
Route::get('/second-buyer-no-eloquent', 'BuyerController@secondTopBuyerNonElo');
Route::get('/purchase-list-eloquent', 'BuyerController@buyerListElo');
Route::get('/purchase-list-no-eloquent', 'BuyerController@buyerListNonElo');

Route::get('/record-transfer', 'RecordController@import');

Route::view('/define-callback-js', 'define-callback');

Route::view('/animation', 'animation');

Route::view('/sort-js', 'array-actions.sort-js');
Route::view('/foreach-js', 'array-actions.foreach-js');
Route::view('/filter-js', 'array-actions.filter-js');
Route::view('/map-js', 'array-actions.map-js');
Route::view('/reduce-js', 'array-actions.reduce-js');

Route::view('/i-m-funny', 'i-am-funny');
