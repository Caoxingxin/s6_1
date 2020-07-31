<?php

/*...*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::resource('/article', 'ArticleController');
});

Route::get('/article', 'ArticleController@index')->name('article.list');

