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

Route::get('/address/province', [AddressController::class, 'getAllProvince']);
Route::get('/address/district', [AddressController::class, 'getAllDistrictByProvinceId']);
Route::get('/address/ward', [AddressController::class, 'getAllWardByDistrictId']);
Route::get('/address/street', [AddressController::class, 'getAllStreetByDistrictId']);



Route::get('/post/search', 'PostController@searchPost');
Route::resource('/post', 'PostController');

//Route::resource('post', 'PostController');
