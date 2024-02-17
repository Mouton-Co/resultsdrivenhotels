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

// root pages
Route::get('/', function () {
    return view('pages.homepage');
});
Route::get('offers', function () {
    return view('pages.offers');
});
Route::get('about-us', function () {
    return view('pages.about-us');
});
Route::get('contact-us', function () {
    return view('pages.contact-us');
});
Route::get('gallery', function () {
    return view('pages.gallery');
});
Route::get('experiences-and-occasions', function () {
    return view('pages.experiences-and-occasions');
});
Route::get('news', function () {
    return view('pages.news');
});

// experiences and occasions
Route::group(['prefix' => 'experiences-and-occasions'], function () {
    $experiences = [
        'weddings',
        'celebrations',
        'honeymoons',
        'meetings-and-events',
        'family-experiences',
        'exclusive-takeovers',
        'incentives',
    ];
    foreach ($experiences as $experience) {
        Route::get($experience, function () use ($experience) {
            return view('pages.experiences-and-occasions.'.$experience);
        });
    }
});

// news
Route::group(['prefix' => 'news'], function () {
    Route::get('press-release-example', function () {
        return view('pages.news.press-release-example');
    });
});
