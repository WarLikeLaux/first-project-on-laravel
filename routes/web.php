<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::post('/contacts/submit', 'ContactsController@submit')->name('contact-form');
