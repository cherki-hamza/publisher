<?php

use App\Http\Controllers\admin\PlatformController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();


Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/' , [DashboardController::class,'index'])->name('admin');

    Route::controller(UserController::class)->group(function () {
        Route::get('user', 'index')->middleware(['permission:read user'])->name('user.index');
        Route::post('user', 'store')->middleware(['permission:create user'])->name('user.store');
        Route::post('user/show', 'show')->middleware(['permission:read user'])->name('user.show');
        Route::put('user', 'update')->middleware(['permission:update user'])->name('user.update');
        Route::delete('user', 'destroy')->middleware(['permission:delete user'])->name('user.destroy');
    });

    // Security routes
    Route::get('/security' , [UserController::class,'security'])->name('security');
    Route::put('/security/update_email' , [UserController::class,'update_email'])->name('update_email');
    Route::put('/security/update_mobile' , [UserController::class,'update_mobile'])->name('update_mobile');
    Route::put('/security/update_password' , [UserController::class,'update_password'])->name('update_password');

    // role routes
    Route::controller(RoleController::class)->group(function () {
        Route::get('role', 'index')->middleware(['permission:read role'])->name('role.index');
        Route::post('role', 'store')->middleware(['permission:create role'])->name('role.store');
        Route::post('role/show', 'show')->middleware(['permission:read role'])->name('role.show');
        Route::put('role', 'update')->middleware(['permission:update role'])->name('role.update');
        Route::delete('role', 'destroy')->middleware(['permission:delete role'])->name('role.destroy');
    });

    // permission routes
    Route::controller(PermissionController::class)->group(function () {
        Route::get('permission', 'index')->middleware(['permission:read permission'])->name('permission.index');
        Route::post('permission', 'store')->middleware(['permission:create permission'])->name('permission.store');
        Route::post('permission/show', 'show')->middleware(['permission:read permission'])->name('permission.show');
        Route::put('permission', 'update')->middleware(['permission:update permission'])->name('permission.update');
        Route::delete('permission', 'destroy')->middleware(['permission:delete permission'])->name('permission.destroy');
        Route::get('permission/reload', 'reloadPermission')->middleware(['permission:create permission'])->name('permission.reload');
    });

    // platform routes
    Route::get('/platform' , [PlatformController::class,'index'])->name('platform_index');
    // websites-requirements
    Route::get('/platform/websites-requirements' , [PlatformController::class,'websites_requirements'])->name('websites_requirements');
    // websites/verify/unique
    Route::get('/platform/websites/verify/unique' , [PlatformController::class,'verify_unique'])->name('verify_unique');

    // publisher routes
    Route::post('/publisher/website/send', [PublisherController::class,'submit_url'])->name('submit_url');
    // /websites/unique
    Route::post('/publisher/website/unique', [PublisherController::class,'website_unique'])->name('website_unique');

});
