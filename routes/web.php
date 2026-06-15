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

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');

    Route::resource('/departments', DepartmentController::class);

    Route::resource('/facultes', FacultyController::class);

    Route::resource('/graduates', GraduateController::class);

    Route::resource('/users', UserController::class)->only('index', 'edit', 'update');

    // Route::get('/users/edit', [UserController::class, 'update'])->name('users.edit');

    Route::resource('/roles', RoleController::class);

    Route::controller(UserRoleController::class)->group(function () {
        Route::get('/assign-role', 'index')->name('assign-role.index');
        Route::post('/assign-role', 'assignRole')->name('assign-role.store');
        // Route::delete('/remove-role/{user}/{role}', 'remove')->name('assign-role.destroy');
    });

    Route::get('/settings', [SettingController::class, 'index'])->name('setting');

    Route::get('/my-profile', [ProfileController::class, 'index']);

    Route::get('/my-profile/edit', [ProfileController::class, 'update']);

    Route::resource('/permissions', PermissionController::class)->only(['index', 'create', 'store']);
});

Route::get('/lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
})->name('lang.switch');


require __DIR__ . '/auth.php';
