<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DepartmentController;
use App\Http\Controllers\admin\FacultyController;
use App\Http\Controllers\admin\GraduateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::resource('/departments' , DepartmentController::class);

Route::resource('/facultes' , FacultyController::class);

Route::resource('/graduates' , GraduateController::class);


require __DIR__.'/auth.php';
