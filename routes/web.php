<?php

use Illuminate\Support\Facades\Route;

Route::namespace('frontend')->group(function () {
    Route::get('/', 'AppController@home')->name('app.index');
    Route::get('/listings', 'AppController@listings')->name('app.listings');
    Route::get('/listing/{id}', 'AppController@listing')->name('app.listing');
    Route::get('/about', 'AppController@about');
    //Testing Relationship
    Route::get('/user/{id}', 'AppController@user');
});

Route::middleware('guest')->group(function() {
    Route::get('/register', 'Custom\RegisterController@form')->name('register');
    Route::post('/register', 'Custom\RegisterController@register')->name('register');
    Route::get('/login', 'Custom\LoginController@form')->name('login');
});

Route::post('/login', 'Custom\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::post('/dashboard', 'HomeController@create')->name('create');
});

//Added by Kimheang