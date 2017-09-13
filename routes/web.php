<?php

use Illuminate\Http\Request;
use App\Race;
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

Route::get('/results/{id}/boats/create',    'ResultBoatsController@create')->name('results.boats.create');
Route::post('/results{id}/boats',           'ResultBoatsController@store') ->name('results.boats.store');

Route::get('/results/{id}/races/create',   'ResultRacesController@create')->name('results.races.create');
Route::post('/results/{id}/races/',        'ResultRacesController@store') ->name('results.races.store');

Route::get('/boats',            'BoatController@index')->name('boats.index');
Route::get('boats/{id}/edit',   'BoatController@edit')->name('boats.edit');
Route::put('boats/{id}',        'BoatController@update')->name('boats.update');
Route::delete('boats/{id}',     'BoatController@destroy')->name('boats.destroy');

Route::get('races/{id}/edit',  'RaceController@edit')->name('races.edit');
Route::put('races/{id}',        'RaceController@update')->name('races.update');
Route::delete('races/{id}',     'RaceController@destroy')->name('races.destroy');


