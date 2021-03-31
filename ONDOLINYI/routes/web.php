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
Route::get('/trucks',[\App\Http\Controllers\CustomerController::class,'trucks']);
Route::get('/textile',[\App\Http\Controllers\CustomerController::class,'textile']);
Route::get('/hdf',[\App\Http\Controllers\CustomerController::class,'hdf']);
Route::get('/mdf',[\App\Http\Controllers\CustomerController::class,'mdf']);
Route::get('/admin',[\App\Http\Controllers\CustomerController::class,'admin']);

Route::get('customers',[\App\Http\Controllers\CustomerController::class]);
#Route::get('/signup',\App\Http\Controllers\CustomerController::class,'signup_form');
#Route::get('/login',\App\Http\Controllers\CustomerController::class,'login_form');
