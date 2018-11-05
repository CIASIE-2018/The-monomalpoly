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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function(){
    return redirect('home');
});


Route::get('/decklist','DeckListController@getDecklist')->name('decklist');

Route::get('/deckcreation','DeckCreationController@getEveryCards')->name('deck');

Route::post('/decklist','DeckListController@createDeck');

Route::get('/setDeckActiv','DeckListController@setActiv');

Route::get('/deleteDeck','DeckListController@deleteDeck');

Route::get('/modifDeck','DeckCreationController@modifDeck');

Route::post('/modifDeck','DeckListController@updateDeck');

Route::get('/game/buy/{x}', 'plateauController@buyCell');

Route::get('/game/roll', 'plateauController@rollDice');

Route::get('/game', 'plateauController@index');

Route::view('/rules','rules');
