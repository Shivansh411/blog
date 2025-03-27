<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('/');


Route::get('/about-us', function () {
    return view('about_us');
})->name('about.us');


Route::get('/blog-details/{id}', function () {
    return view('blog_details');
})->name('blog.details');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::get('/category', function () {
    return view('category');
})->name('category');






Route::get('admin/login', function () {
    return view('admin/login');
})->name('login');


Route::get('admin/index', function () {
    return view('admin/index');
})->name('index');