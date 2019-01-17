<?php

// Route::resource('products', 'ProductsController');
Auth::routes();
Route::get('/', 'HomeController@index')->name('index');
