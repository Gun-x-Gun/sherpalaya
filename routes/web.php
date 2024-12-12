<?php

use Illuminate\Support\Facades\Route;


//navigation
Route::get('/', function () {
    return view('nav_items.home');
});
Route::get('/trekking', function () {
    return view('nav_items.trekking');
});
Route::get('/about', function () {
    return view('nav_items.about_us');
});
Route::get('/peaks', function () {
    return view('nav_items.peak');
});
Route::get('/expeditions', function () {
    return view('nav_items.expedition');
});
Route::get('/contact', function () {
    return view('nav_items.contact_us');
});


// sub navigation
Route::get('/tour/cultural', function () {
    return view('nav_items.tours.cultural');
});
Route::get('/tour/cycling', function () {
    return view('nav_items.tours.cycling');
});
Route::get('/tour/photography', function () {
    return view('nav_items.tours.photography');
});
Route::get('/tour/running', function () {
    return view('nav_items.tours.running');
});
Route::get('/tour/sight_seeing', function () {
    return view('nav_items.tours.sight_seeing');
});

