<?php

use App\Http\Controllers\admin\PlatformController;
use App\Http\Controllers\backend\SettingController;
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
        Route::get('user/profile', 'user_profile')->name('user_profile');
        Route::put('user/{user_id}/update_profile', 'update_profile')->name('update_profile');
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


    // publisher settings
    Route::get('publisher/settings',[SettingController::class,'settings'])->name('settings');
    // application settings
    Route::get('publisher/settings/application_settings',[SettingController::class,'application_settings'])->name('application_settings');

    // publisher balance
    Route::get('publisher/balance',[SettingController::class,'publisher_balance'])->name('publisher_balance');

    // publisher faq
    Route::get('publisher/faq',[SettingController::class,'publisher_faq'])->name('publisher_faq');


    // platform routes
    Route::get('platform' , [PlatformController::class,'index'])->name('platform_index');
    // websites-requirements
    Route::get('platform/websites-requirements' , [PlatformController::class,'websites_requirements'])->name('websites_requirements');
    // websites/verify/unique
    Route::get('platform/websites/verify/unique' , [PlatformController::class,'verify_unique'])->name('verify_unique');

    // publisher routes
    //Route::get('platform/publisher/website/send', [PublisherController::class,'submit_url'])->name('submit_url');
    // /websites/unique
    Route::any('platform/publisher/website/website_unique', [PublisherController::class,'website_unique'])->name('website_unique');

    // store publisher website with disable status
    Route::post('platform/publisher/website/store_site', [PublisherController::class,'store_site'])->name('store_site');

    // get all performers and site publishers
    Route::post('platform/performers', [PublisherController::class,'performers'])->name('performers');

    // delete site or destroy sites
    Route::delete('platform/site/destroy', [PublisherController::class,'destroy_site'])->name('destroy_site');

    // route for show the tasks preg_replace("(^https?://)", "", 'http://hamza.com')
    //Route::get('platform/user/{user_id}/site/{site_id}/tasks', [PublisherController::class,'site_tasks'])->name('site_tasks');
    // route for get tasks for every website
    Route::get('platform/user/{user_id}/site/{site_id}/task/{task_id}/show', [PublisherController::class,'show_task'])->name('show_task');

    // route for get tasks for every website
    Route::get('platform/user/{user_id}/site/{site_id}/tasks', [PublisherController::class,'site_tasks'])->name('site_tasks');


    // route for  publisher approve task
   Route::put('platform/task/{task_id}/publisher_approve_task' , [PublisherController::class,'publisher_approve_task'])->name('publisher_approve_task');
   //route for publisher reject task
   Route::put('platform/task/{task_id}/publisher_reject_task' , [PublisherController::class,'publisher_reject_task'])->name('publisher_reject_task');

    // route for get tasks and posts not started
    Route::get('publisher/tasks/opentasks' , [PublisherController::class,'opentasks'])->name('opentasks');

    // route for get tasks pending_approval
    Route::get('publisher/tasks/opentasks/in_progress' , [PublisherController::class,'task_in_progress'])->name('task_in_progress');

    // route for get tasks pending_approval
    Route::get('publisher/tasks/opentasks/pending_approval' , [PublisherController::class,'task_pending_approval'])->name('task_pending_approval');

    // route for get tasks improvement
    Route::get('publisher/tasks/opentasks/improvement' , [PublisherController::class,'task_improvement'])->name('task_improvement');

    // route for get tasks waiting_approval
    Route::get('publisher/tasks/opentasks/waiting_approval' , [PublisherController::class,'task_waiting_approval'])->name('task_waiting_approval');

    // route for get tasks completed
    Route::get('publisher/tasks/opentasks/completed' , [PublisherController::class,'task_completed'])->name('task_completed');

    // route for get tasks rejected
    Route::get('publisher/tasks/opentasks/rejected' , [PublisherController::class,'task_rejected'])->name('task_rejected');




});
