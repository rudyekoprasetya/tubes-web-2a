<?php

use Illuminate\Support\Facades\Route;

//mengarahkan ke view baru home 
Route::get('/', function () {
    return view('home');
});

//mengarahkan ke view baru about
Route::get('/about', function () {
    return view('about');
});
