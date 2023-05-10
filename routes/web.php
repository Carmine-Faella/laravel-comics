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
    $footerList = config('footer');
    return view('Home', compact('comicsList','headerList','footerList'));
})->name('home');

Route::get('/Single', function () {
    $comicsList = config('comics');
    $headerList = config('header');
    $footerList = config('footer');
    return view('Single',compact('comicsList','headerList','footerList'));
})->name('single');




