<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/catalog', function () {
    return view('catalog');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contacts', function () {
    return view('contacts');
});
