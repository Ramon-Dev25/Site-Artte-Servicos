<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/quem_somos', function () {
    return view('about');
})->name('about');

