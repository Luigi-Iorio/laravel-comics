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
    $data = [
        "headerLinks" => ["characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news", "shop"],
        "footerLinks" => [
            [
                "title" => "dc comics",
                "links" => ["Character", "Comics", "Movies", "TV", "Games", "Videos", "News"]
            ],
            [
                "title" => "shops",
                "links" => ["Shop DC", "Shop DC Collectibles"]
            ],
            [
                "title" => "dc",
                "links" => ["Terms Of Use", "Privacy policy", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contacts Us"]
            ],
            [
                "title" => "sites",
                "links" => ["DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"]
            ]
        ],
        "socialIcons" => [
            "resources/img/footer-facebook.png", "resources/img/footer-twitter.png", "resources/img/footer-youtube.png", "resources/img/footer-pinterest.png", "resources/img/footer-periscope.png",
        ]
    ];

    return view('home', $data);
});

Route::get('/comics', function () {
    $data = [
        "headerLinks" => ["characters", "comics", "movies", "tv", "games", "collectibles", "videos", "fans", "news", "shop"],
        "footerLinks" => [
            [
                "title" => "dc comics",
                "links" => ["Character", "Comics", "Movies", "TV", "Games", "Videos", "News"]
            ],
            [
                "title" => "shops",
                "links" => ["Shop DC", "Shop DC Collectibles"]
            ],
            [
                "title" => "dc",
                "links" => ["Terms Of Use", "Privacy policy", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contacts Us"]
            ],
            [
                "title" => "sites",
                "links" => ["DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"]
            ],
        ],
        "bannerList" => [
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
        ],
        "socialIcons" => [
            "resources/img/footer-facebook.png", "resources/img/footer-twitter.png", "resources/img/footer-youtube.png", "resources/img/footer-pinterest.png", "resources/img/footer-periscope.png",
        ],
        "fumetti" => config("comics_db"),
    ];

    return view('comics', $data);
});
