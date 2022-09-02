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


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('form/create', 'App\Http\Controllers\FormController@create');
Route::post('form/store', 'App\Http\Controllers\FormController@store')->name('store');
Route::get('/', function () {
    return view('sub');
})->name('sub');

Route::get('movie/index','App\Http\Controllers\FormController@index')->name('index');
   
