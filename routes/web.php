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

    $db = config('comics.db');
    $topbar = config('comics.topbar');
    $mainbar = config('comics.mainbar');
    $footbar = config('comics.footbar');

    $data = [
        'db'=>$db,
        'topbar'=>$topbar,
        'mainbar'=>$mainbar,
        'footbar'=>$footbar
    ];

    return view('Home', $data);
})->name('home');

Route::get('/Single', function () {

    $db = config('comics.db');
    $topbar = config('comics.topbar');
    $mainbar = config('comics.mainbar');
    $footbar = config('comics.footbar');

    $data = [
        'db'=>$db,
        'topbar'=>$topbar,
        'mainbar'=>$mainbar,
        'footbar'=>$footbar
    ];
    
    return view('Single',$data);
})->name('single');




