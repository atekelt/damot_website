<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/impact', function () {
    return view('impact');
});
Route::get('/export', function () {
    return view('export');
});
Route::get('/contact', function () {
    return view('contact');
});