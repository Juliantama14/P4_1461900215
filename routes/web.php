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
    return view('index0215');
});
Route::get('/about', function () {
    return view('about0215');
});
Route::get('/buku', 'App\Http\Controllers\Data_1461900215Controller@index');
Route::get('/export-excel', 'App\Http\Controllers\UsersController@export');
