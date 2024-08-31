<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('reader_posts');
})->name('home');



Route::get('/about', function () {
    return view('about');
});

Route::get('/blog1',function(){
    return view('eachblog.first');
})->name('blog1');
