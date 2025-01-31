<?php

use App\Http\Controllers\ExpeditionController;
use App\Http\Controllers\PeakController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TrekController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

// Redirect to home page
Route::redirect('/', '/home');


// Search route
Route::prefix('/search')
    ->controller(SearchController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/query', 'query');
    });

// Website Route
Route::controller(WebsiteController::class)
    ->group(function () {
        Route::get('/home', 'home')->name('website.home');
        Route::get('/contact', 'contactUs')->name('website.contact');
        Route::get('/about_us', 'aboutUs')->name('website.company.about_us');
        Route::get('/services', 'services')->name('website.company.our_services');
        Route::get('/why_sherpalaya', 'whySherpalaya')->name('website.company.why_sherpalaya');
    });

// Trek Route
Route::controller(TrekController::class)
    ->prefix('/treks')
    ->group(function () {
        Route::get('/', 'index')->name('website.trekking');
        Route::get('/{id}', 'show')->name('show_trek');
    });


// Peak Route
Route::controller(PeakController::class)
    ->prefix('/peaks')
    ->group(function () {
        Route::get('/', 'index')->name('website.peaks');
        Route::get('/{id}', 'show')->name('show_peak');
    });

// Expedition Route
Route::controller(ExpeditionController::class)
    ->prefix('/expeditions')
    ->group(function () {
        Route::get('/', 'index')->name('website.expeditions');
        Route::get('/{id}', 'show')->name('show_expedition');
    });

// Tour Route
Route::controller(TourController::class)
    ->prefix('/tours')
    ->group(function () {
        Route::get('/', 'index')->name('website.tours');
        Route::get('/{id}', 'show')->name('show_tour');
    });

// Subin Route

// sub navigation
Route::get('/tour/cultural', function () {
    return view('website.tour_items.cultural');
})->name('website.tours.cultural');
Route::get('/tour/cycling', function () {
    return view('website.tour_items.cycling');
})->name('website.tours.cycling');
Route::get('/tour/photography', function () {
    return view('website.tour_items.photography');
})->name('website.tours.photography');
Route::get('/tour/running', function () {
    return view('website.tour_items.running');
})->name('website.tours.running');
Route::get('/tour/sight_seeing', function () {
    return view('website.tour_items.sight_seeing');
})->name('website.tours.sightseeing');



//peak


//tour




// searchbar

// Route::get('/home', function(){
//     return view('website.home');
// })->name('website.home');

// Route::get('/services', function(){
//     return view('website.services');
// })->name('website.services');
