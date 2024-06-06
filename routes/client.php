<?php

use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SiteController;
use App\Http\Controllers\Backend\TaskController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->middleware(['auth'])->group(function () {

    /* // show the form for client for the content Placement  OR content creation and Placement
    Route::get("order_post_from_publisher/project/{project_id}/site/{site_id}", [OrderController::class,'order_index'])->name('order_index');
    // store for client the content Placement
    Route::post('orders/store_cp/project/{project_id}/site/{site_id}' , [OrderController::class,'store_cp'])->name('store_cp');
    // store for the client the content creation and Placement
    Route::post('orders/store_ccp/project/{project_id}/site/{site_id}' , [OrderController::class,'store_ccp'])->name('store_ccp');

    // show all publishers site for every project by id : /myprojects/1
    Route::get('myprojects/{project_id}/publishers' , [SiteController::class,'site_index'])->name('site_index');
    // samd day delivery
    Route::get('myprojects/{project_id}/publishers/same_day_delivery' , [SiteController::class,'site_index'])->name('same_day_delivery');

    // route for search publisher by any keword
    Route::post('myprojects/{project_id}/publishers/{search?}' , [SiteController::class,'site_index'])->name('search');

    // Get tasks by project for client
    Route::get('/tasks/user/{user_id}/project/{project_id}/client',[TaskController::class,'client_task_by_user_by_project'])->name('client_task_by_user_by_project');

    // route for show the client post
    Route::get('project/{project_id?}/task/{task_id?}/show_client_post' , [PostController::class,'show_client_post'])->name('show_client_post');

    // rote for client for handel the post if ( approve or improve or rejected )
    Route::post('task/{task_id?}/post/{post_id?}/user/{user_id?}/project/{project_id?}/handel_task',[TaskController::class,'handel_task'])->name('handel_task');

    // route for show the client invoices
    Route::get('client/invoices' , [OrderController::class,'client_invoices'])->name('client_invoices'); */

    // ckeditor
   /*  Route::get('client/ck' , [HomeController::class,'ck'])->name('ck');

    Route::post('client/store_ck' , [HomeController::class,'store_ck'])->name('store_ck'); */


});
