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

Route::get(
    '/contacts/all/{id}',
    'ContactsController@oneMessage'
)->name('contact-message');

Route::get(
    '/contacts/all/{id}/update',
    'ContactsController@updateMessage'
)->name('contact-message-update');

Route::post(
    '/contacts/all/{id}/update',
    'ContactsController@updateMessageSubmit'
)->name('contact-message-update-submit');

Route::get(
    '/contacts/all/{id}/delete',
    'ContactsController@deleteMessage'
)->name('contact-message-delete');

Route::get('/contacts/all', 'ContactsController@allMessages')->name('contact-messages');
Route::post('/contacts/submit', 'ContactsController@submit')->name('contact-form');
