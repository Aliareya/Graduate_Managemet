<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/graduate', function () {
    return view('pages.graduate.index');
});

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});
