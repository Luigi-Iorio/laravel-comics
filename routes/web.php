<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $headerLinks = ["characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news", "shop"];
    $data = config("comics_db");

    return view('home', compact('headerLinks', 'data'));
});
