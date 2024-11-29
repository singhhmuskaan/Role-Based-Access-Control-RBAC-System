<?php

use App\Http\Controllers\RoleManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [\App\Http\Controllers\AdminAuthController::class, 'loginView'])->name('login.view');
Route::post('/login', [\App\Http\Controllers\AdminAuthController::class, 'login'])->name('login');

Route::middleware(['role.permission'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminAuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/role-dashboard', [RoleManagementController::class, 'index'])->name('role.index');
    Route::get('/permission-dashboard', [RoleManagementController::class, 'permissionView'])->name('permission.index');
    Route::post('/assign-role', [RoleManagementController::class, 'assignRole'])->name('role.assign');
    Route::post('/assign-permission', [RoleManagementController::class, 'assignPermission'])->name('permission.assign');
    Route::get('/logout', [\App\Http\Controllers\AdminAuthController::class, 'logout'])->name('logout');
});
