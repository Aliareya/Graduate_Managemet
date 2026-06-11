<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DepartmentController;
use App\Http\Controllers\admin\FacultyController;
use App\Http\Controllers\admin\GraduateController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::resource('/departments' , DepartmentController::class);

Route::resource('/facultes' , FacultyController::class);

Route::resource('/graduates' , GraduateController::class);

Route::get('/users' , [UserController::class , 'index'])->name('users');
Route::get('/users/edit' , [UserController::class , 'update'])->name('users.edit');

Route::resource('/roles' , RoleController::class);

Route::get('/settings' , [SettingController::class , 'index'])->name('setting');

Route::get('/my-profile' , [ProfileController::class, 'index']);

Route::get('/my-profile/edit' , [ProfileController::class, 'update']);



require __DIR__.'/auth.php';

