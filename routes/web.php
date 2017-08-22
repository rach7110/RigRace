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
// TEST ROUTES:
Route::get('/users/{user_id}', function($id) {
    $user = DB::table('users')->find($id);

    dd($user);
});
// REQUEST CLASS METHODS
Route::get('request', function(Request $request) {
    // dd($request->path());
    // dd($request->url());
    // dd($request->all());
    // dd($request->input('someQuery'));
    // dd($request->someQuery); //input as dynamic property 
    // dd($request->input('someQuery', 'default value if empty'));

});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'ResultController@index')->name('home');

Route::resource('results', 'ResultController');
Route::resource('boats', 'BoatController');