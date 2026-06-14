<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DepartmentController;
use App\Http\Controllers\admin\FacultyController;
use App\Http\Controllers\admin\GraduateController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\UserRoleController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('home');

    Route::resource('/departments' , DepartmentController::class);
    
    Route::resource('/facultes' , FacultyController::class);
    
    Route::resource('/graduates' , GraduateController::class);
    
    Route::get('/users' , [UserController::class , 'index'])->name('users');
    Route::get('/assignRole' , [UserRoleController::class , 'index'])->name('assignRole');
    Route::post('/assignRole' , [UserRoleController::class , 'assignRole'])->name('assignRole');
    Route::get('/removerole' , [UserRoleController::class , 'remove'])->name('removerole');

    Route::get('/users/edit' , [UserController::class , 'update'])->name('users.edit');
    
    Route::resource('/roles' , RoleController::class);
    
    Route::get('/settings' , [SettingController::class , 'index'])->name('setting');
    
    Route::get('/my-profile' , [ProfileController::class, 'index']);
    
    Route::get('/my-profile/edit' , [ProfileController::class, 'update']);

    Route::resource('/permissions' , PermissionController::class)->only(['index', 'create', 'store']);
});

require __DIR__.'/auth.php';

