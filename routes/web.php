<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::get('offers', function () {
    return view('pages.offers');
})->name('offers');
Route::get('about-us', function () {
    return view('pages.about-us');
})->name('about-us');
Route::get('contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');
Route::get('gallery', [GalleryController::class, 'all'])->name('gallery');
Route::get('experiences-and-occasions', function () {
    return view('pages.experiences-and-occasions');
})->name('experiences-and-occasions');

// experiences and occasions
Route::get('experiences-and-occasions/{experience}', [GalleryController::class, 'index'])->name('experiences-and-occasions');

// news
Route::group(['prefix' => 'news'], function () {
    Route::get('{slug}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/', [NewsController::class, 'index'])->name('news.index');
});
