<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/admin', function () {
    return view('admin.home');
})->name('admin');

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
    'admin/contacts/all/{id}',
    'ContactsController@oneMessage'
)->name('admin-contacts-message');

Route::get(
    'admin/contacts/all/{id}/update',
    'ContactsController@updateMessage'
)->name('admin-contacts-message-update');

Route::post(
    'admin/contacts/all/{id}/update',
    'ContactsController@updateMessageSubmit'
)->name('admin-contacts-message-update-submit');

Route::get(
    'admin/contacts/all/{id}/delete',
    'ContactsController@deleteMessage'
)->name('admin-contacts-message-delete');

Route::get('admin/contacts', 'ContactsController@allMessages')->name('admin-contacts-messages');
Route::post('/contacts/submit', 'ContactsController@submit')->name('contact-form');
