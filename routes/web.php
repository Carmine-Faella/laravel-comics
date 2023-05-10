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

    $comicsList = config('comics');
    $headerList = config('header');

    return view('Home', compact('comicsList','headerList'));
})->name('home');

Route::get('/Single', function () {
    return view('Single');
})->name('single');


