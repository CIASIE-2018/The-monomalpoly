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

Route::get('/plateau', function () {
    $game = cache('game');
    $me = Cookie::get('id');
    if (!$me) {
        $me = uniqid();
        Cookie::queue('id', $me, 60 * 5);
    }
    if (!$game) {
        $game = new Game();
    }
    if (!$game->isStarted()) {
        $game->join($me);
    }
    if ($game->isStarted()) {
        $test = true;
        foreach ($game->getListPlayer() as => $value) {
            if($me == $value->getId()) {
                $test = false;
            }
        }
        if ($test) {
            abort(404);
        }
    }
    cache(
        [
            'game' => $game
        ],
        60 * 5
    );
    return view('plateau', [
        'game' => $game
    ]);
});

Route::get('/test', function () {
    
});

Route::get('/test2', function () {
    $var = "Hello world";
    return view('vue2', [
        'abcd' => $var
    ]);
});