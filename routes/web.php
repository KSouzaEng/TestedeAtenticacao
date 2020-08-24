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

Route::middleware('auth')->group(function(){

/*Route::get('api','ApiController@index');
Route::post('api','ApiController@store');
Route::get('api/create', 'ApiController@create');
Route::get('api/{id}/edit','ApiController@edit')->name('pessoa.edit');
Route::put('api/{id}','ApiController@update')->name('pessoa.update');
Route::delete('api/{id}','ApiController@destroy')->name('pessoa.delete');*/

    Route::resource('api', 'ApiController');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
