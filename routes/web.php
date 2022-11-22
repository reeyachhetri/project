<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Routes;
use App\User;


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


Route::get('form/create', 'App\Http\Controllers\FormController@create');
Route::post('form/store', 'App\Http\Controllers\FormController@store')->name('store');
Route::get('form/submit', function () {
    return view('sub');
})->name('sub');

Route::get('movie/index','App\Http\Controllers\FormController@index')->name('index');
Route::get('/movie/show/{id}', 'App\Http\Controllers\FormController@show')->name('show');
Route::get('/movie/edit/{id}', 'App\Http\Controllers\FormController@edit')->name('edit');
Route::post('/movie/update/{id}', 'App\Http\Controllers\FormController@update')->name('update');
Route::get('/movie/delete/{id}','App\Http\Controllers\FormController@destroy')->name('delete');

Route::get('movie/book/{id}','App\Http\Controllers\BookController@show')->name('book');
Route::post('book/store', 'App\Http\Controllers\BookController@store')->name('book.store');



Route::get('home','App\Http\Controllers\LoginController@index')->name('home');


Route::get('image','App\Http\Controllers\ImageController@index')->name('image');
Route::post('image/store','App\Http\Controllers\ImageController@store')->name('image.store');

Auth::routes();
Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');
Route::post('/upload','App\Http\Controllers\HomeController@upload')->name('upload');
//Route::post('/home','HomeController@upload')->name('upload');
//Route::post('/upload','App\Http\Controllers\ImageController@store')->name('image.store');
