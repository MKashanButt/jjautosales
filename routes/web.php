<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/stocks', 'stocks')->name('stocks');
Route::view('/about', 'about')->name('about');
