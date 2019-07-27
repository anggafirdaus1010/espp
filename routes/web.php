<?php

Auth::routes(['register' => false]);
Route::get('/dashboard', 'HomeController@dashboard')->name('home.dashboard');
Route::get('/', 'SiteController@root')->name('site.root');
