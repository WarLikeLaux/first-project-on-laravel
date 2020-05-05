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

Route::get(
    'admin/contacts',
    'ContactsController@allMessages'
)->name('admin-contacts-messages');

Route::post(
    '/contacts/submit',
    'ContactsController@submit'
)->name('contact-form');

Route::get(
    '/blog',
    'BlogController@allArticles'
)->name('blog');

Route::get(
    '/blog/{id}',
    'BlogController@oneArticle'
)->name('blog-article');

Route::get(
    'admin/blog',
    'AdminController@allArticles'
)->name('admin-blog');

Route::get(
    'admin/blog/create',
    'AdminController@createArticle'
)->name('admin-blog-article-create');

Route::post(
    'admin/blog/create',
    'AdminController@createArticleSubmit'
)->name('admin-blog-article-create');

Route::get(
    'admin/blog/{id}/delete',
    'AdminController@deleteArticle'
)->name('admin-blog-article-delete');

Route::get(
    'admin/blog/{id}/update',
    'AdminController@updateArticle'
)->name('admin-blog-article-update');

Route::post(
    'admin/blog/{id}/update',
    'AdminController@updateArticleSubmit'
)->name('admin-blog-article-update-submit');
