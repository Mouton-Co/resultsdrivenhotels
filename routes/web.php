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
})->name('homepage');
Route::get('offers', function () {
    return view('pages.offers');
})->name('offers');
Route::get('about-us', function () {
    return view('pages.about-us');
})->name('about-us');
Route::get('contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');
Route::get('gallery', function () {
    return view('pages.gallery');
})->name('gallery');
Route::get('experiences-and-occasions', function () {
    return view('pages.experiences-and-occasions');
})->name('experiences-and-occasions');
Route::get('news', function () {
    return view('pages.news');
})->name('news');

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
        })->name('experiences-and-occasions.'.$experience);
    }
});

// news
Route::group(['prefix' => 'news'], function () {
    Route::get('press-release-example', function () {
        return view('pages.news.press-release-example');
    })->name('news.press-release-example');
});
