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

    $bannerList =
        [
            [
                "img" => "resources/img/buy-comics-digital-comics.png",
                "text" => "digital comics",
            ],
            [
                "img" => "resources/img/buy-comics-merchandise.png",
                "text" => "dc merchandise",
            ],
            [
                "img" => "resources/img/buy-comics-shop-locator.png",
                "text" => "subscription",
            ],
            [
                "img" => "resources/img/buy-comics-subscriptions.png",
                "text" => "comic shop locator",
            ],
            [
                "img" => "resources/img/buy-dc-power-visa.svg",
                "text" => "dc power visa",
            ],
        ];

    return view('home', compact('headerLinks', 'data', 'bannerList'));
});
