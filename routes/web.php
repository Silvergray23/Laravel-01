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
    return view('solid-state/index');
});


Route::get('/generic', function () {
    return view('solid-state/generic');
});

Route::get('/elements', function () {
    return view('solid-state/elements');
});
