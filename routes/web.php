<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home.index');
Route::get('/', 'SiteController@root')->name('site.root');
