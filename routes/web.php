<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage.landing');
});

Route::get('/explore', function () {
    return view('explore.exploreCatogery');
});
