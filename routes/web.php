<?php

use Illuminate\Http\Request;
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

Auth::routes();

Route::get('/home', 'ResultController@index')->name('home');


Route::get('/results/{id}/boats/create',    'ResultBoats@create')->name('results.boats.create');
Route::post('/results{id}/boats',           'ResultBoats@store')->name('results.boats.store');


// Route::resource('results.boats', 'BoatController');
Route::get('/boats',            'BoatController@index');
Route::get('boats/{id}',        'BoatController@show');
Route::get('boats/{id}/edit',   'BoatController@edit');
Route::put('boats/{id}',        'BoatController@update');
Route::delete('boats/{id}',     'BoatController@destroy');


Route::resource('results', 'ResultController');
