<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('website.home');
})->name('website.home');
Route::get('/trekking', function () {
    return view('website.trekking');
})->name('website.trekking');
Route::get('/about', function () {
    return view('website.about_us');
})->name('website.about');
Route::get('/peaks', function () {
    return view('website.peaks');
})->name('website.peaks');
Route::get('/expeditions', function () {
    return view('website.expeditions');
})->name('website.expeditions');
Route::get('/contact', function () {
    return view('website.contact_us');
})->name('website.contact');


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


// Route::get('/home', function(){
//     return view('website.home');
// })->name('website.home');

// Route::get('/services', function(){
//     return view('website.services');
// })->name('website.services');