<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/graduate', function () {
    return view('pages.graduate.index');
});
Route::get('/graduate/create', function () {
    return view('pages.graduate.create');
});
Route::get('/graduate/profile', function () {
    return view('pages.graduate.profile');
});

///////////////////////////////////////////////////////////////////
Route::get('/facultes', function () {
    return view('pages.facultes.index');
});
Route::get('/facultes/create', function () {
    return view('pages.facultes.create');
});
Route::get('/facultes/show', function () {
    return view('pages.facultes.show');
});
Route::get('/facultes/edit', function () {
    return view('pages.facultes.edit');
});

/////////////////////////////////////////////////////////////////// department
Route::get('/departments', function () {
    return view('pages.departments.index');
});
Route::get('/departments/create', function () {
    return view('pages.departments.create');
});
Route::get('/departments/show', function () {
    return view('pages.departments.show');
});
Route::get('/departments/edit', function () {
    return view('pages.departments.edit');
});
//////////////////////////////////////////////////////////////////

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});
