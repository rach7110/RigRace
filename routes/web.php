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

Route::resource('results', 'ResultController');

Route::get('/results/{id}/boats/create',    'ResultBoats@create')->name('results.boats.create');
Route::post('/results{id}/boats',           'ResultBoats@store') ->name('results.boats.store');

Route::get('/results/{id}/races/create',   'ResultRaces@create')->name('results.races.create');
Route::get('/results/{id}/races/',         'ResultRaces@store') ->name('results.races.store');

Route::get('/boats',            'BoatController@index')->name('boats.index');
Route::get('boats/{id}/edit',   'BoatController@edit')->name('boats.edit');
Route::put('boats/{id}',        'BoatController@update')->name('boats.update');
Route::delete('boats/{id}',     'BoatController@destroy')->name('boats.destroy');