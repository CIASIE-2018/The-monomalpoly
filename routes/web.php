<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('test', function () {
//     event(new App\Events\JoinGame('John'));
//     return "Event has been sent!";
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){
    return redirect('home');
});

Route::get('/test2/buy/{x}', 'plateauController@buyCell');
Route::get('/test2/roll', 'plateauController@rollDice');

Route::get('/test2', 'plateauController@index');

Route::view('/rules','rules');