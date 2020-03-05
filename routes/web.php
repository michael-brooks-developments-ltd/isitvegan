<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index');
Route::get('/search', 'ProductController@search');

Route::get('/c/{slug}', 'CategoryController@show')->name('category.show');
Route::get('/p/{slug}', 'ProductController@show')->name('product.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
