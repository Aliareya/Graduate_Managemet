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

Route::get('/users' , function(){
    return view('admin.pages.users.index');
});


require __DIR__.'/auth.php';
