<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.departments.Index');
})->name('home');


require __DIR__.'/auth.php';
