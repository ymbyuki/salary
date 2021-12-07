<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ListController;


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
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/index', 'App\Http\Controllers\SalaryController@index')->name('home');
    Route::get('/record', 'App\Http\Controllers\SalaryController@create')->name('record');
    Route::post('/record', 'App\Http\Controllers\SalaryController@store');
    Route::post('/content', 'App\Http\Controllers\SalaryController@show')->name('content');
    Route::post('/content/delete', 'App\Http\Controllers\SalaryController@delete')->name('delete');
    Route::get('/index/allList', 'App\Http\Controllers\ListController@index')->name('list');
    Route::post('/update', 'App\Http\Controllers\SalaryController@edit')->name('update');
    Route::get('/update', 'App\Http\Controllers\SalaryController@edit')->name('update_get');
    Route::post('/update/crear', 'App\Http\Controllers\SalaryController@update')->name('update_ok');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
