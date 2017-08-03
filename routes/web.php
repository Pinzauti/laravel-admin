<?php

/* ***   AUTHENTICATION   *** */
Auth::routes();
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


/*
 * ADMINISTRATION
 */

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function (){

    /* ***   DASHBOARD   *** */
    Route::get('/', 'DashboardController@index')->name("dashboard");

    /* ***   USERS   *** */
    Route::get('/users', 'UsersController@index')->name("users");
    Route::get('/users/userdata', 'UsersController@userData')->name("user.data");
    Route::get('/users/{id}/edit', 'UsersController@edit')->name("users.edit");
    Route::patch('/users/{id}/update', 'UsersController@update')->name("users.update");

    /* ***   SETTINGS   *** */
    Route::get('/settings', 'SettingsController@index')->name("settings");
    Route::post('/settings', 'SettingsController@update')->name('settings.update');

    /* ***   ARTICLES *** */
    /*Route::get('/articles', 'ArticlesController@index')->name('articles');
    Route::get('/articles/data', 'ArticlesController@data')->name('articles.data');
    Route::get('/articles/create', 'ArticlesController@create')->name('articles.create');
    Route::post('/articles', 'ArticlesController@store')->name('articles.store');
    Route::post('/articles', 'ArticlesController@store')->name('articles.store');
    Route::get('/articles/{id}/edit', 'ArticlesController@edit')->name('articles.edit');
    Route::patch('/articles/{id}/update', 'ArticlesController@edit')->name('articles.update');*/

    /* *** ARTICLES CATEGORIES *** */
    /*Route::post('/articles_categories', 'ArticleCategoryController@store')->name('article_categories.store');*/

});
