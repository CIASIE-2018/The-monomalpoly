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


Route::get('/', function () {
    return view('ViewAccueil');
});

Route::get('/test', function () {
    return view('plateau');
});

Route::get('/test2', function () {
    $var = [01, 12, 23, 34, 45, 56, 67, 78, 89, 91, 100];
    return view('vue2', [
        'abcd' => $var
    ]);
});