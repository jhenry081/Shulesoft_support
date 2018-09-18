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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/master layout', function () {
    return view('layouts.master');
});

Route::get('/marking', function () {
    return view('exam.add_mark');
});
Route::get('/homepage', function () {
    return view('homepage.home');
});
