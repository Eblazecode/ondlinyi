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
    return view('landing');
});
Route::get('/ethanol',[\App\Http\Controllers\CustomerController::class,'ethanol']);
Route::get('/ethanol',[\App\Http\Controllers\CustomerController::class,'trucks']);
Route::get('/ethanol',[\App\Http\Controllers\CustomerController::class,'textile']);
Route::get('/ethanol',[\App\Http\Controllers\CustomerController::class,'hdf']);
Route::get('/ethanol',[\App\Http\Controllers\CustomerController::class,'mdf']);
