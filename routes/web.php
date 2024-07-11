<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/quem_somos', function () {
    return view('about');
})->name('about');

Route::get('/nossos_servicos', function () {
    return view('service');
})->name('service');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/perguntas', function () {
    return view('questions');
})->name('questions');

Route::get('/orcamentos', function () {
    return view('budgets');
})->name('budgets');

