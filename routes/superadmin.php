<?php

use App\Http\Controllers\admin\TaskController;
use App\Http\Controllers\backend\SuperAdminController;
use App\Services\PayPalService;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['auth'])->group(function () {


   // route for super admin show all publisher sites
   // route for all publisher sites for super admin
   Route::get('all_publishers',[SuperAdminController::class,'all_publishers'])->name('all_publishers');
   Route::post('all_publishers/{search?}',[SuperAdminController::class,'all_publishers'])->name('all_publishers_search');

   // route for all disabled publisher sites
   Route::get('all_disabled_publishers',[SuperAdminController::class,'all_disabled_publishers'])->name('all_disabled_publishers');
   Route::post('all_disabled_publishers/{search?}',[SuperAdminController::class,'all_disabled_publishers'])->name('all_disabled_publishers_search');

   // route for approve publisher
   Route::put('approve_site/{site_id}/approve' , [SuperAdminController::class,'approve_site'])->name('approve_site');
   //route for disapprove publisher
   Route::put('reject_site/{site_id}/reject' , [SuperAdminController::class,'reject_site'])->name('reject_site');
   // ban_site
   Route::put('ban_site/{site_id}/ban_site' , [SuperAdminController::class,'ban_site'])->name('ban_site');

   // super admin get and controle the client tasks
   Route::get('tasks/clients_tasks',[TaskController::class,'clients_tasks'])->name('clients_tasks');
   // show tasks for every site by user
   Route::get('tasks/user/{user_id}/sites',[TaskController::class,'publisher_sites'])->name('publisher_sites');
   // route for get the tasks for site
   Route::get('tasks/user/{user_id}/site/{site_id}/publisher_site_tasks',[TaskController::class,'publisher_site_tasks'])->name('publisher_site_tasks');

   // show task for super admin
   Route::get('task/{task_id}/show',[TaskController::class,'admin_show_task'])->name('admin_show_task');

   // route for super admin approve the task from client to publisher
   Route::any('task/{task_id}/admin_approve_task',[TaskController::class,'admin_approve_task'])->name('admin_approve_task');

   // route for super admin reject the task from client to publisher
   Route::any('task/{task_id}/admin_reject_task',[TaskController::class,'admin_reject_task'])->name('admin_reject_task');


   // send payement to publisher
   //Route::any('publisher/send',[TaskController::class,'super_admin_send_to_publisher'])->name('super_admin_send_to_publisher');


   Route::any('publisher/send', function(){
     $payPalService = new PayPalService;

     $recipientEmail = 'cherki0hamza@gmail.com'; //$request->input('email');
     $amount = 1000; //$request->input('amount');
     $currency = 'USD'; //$request->input('currency', 'USD');

     //$response = $this->payPalService->sendMoney($recipientEmail, $amount, $currency);

     $response = $payPalService->sendMoney($recipientEmail, $amount, $currency);

     if (isset($response['batch_header']['batch_status']) && $response['batch_header']['batch_status'] === 'SUCCESS') {
        return response()->json([
            'status' => 'success',
            'data' => $response,
        ], 200);
    } else {
        return response()->json([
            'status' => 'error',
            'message' => $response['message'] ?? 'An error occurred during payout.',
            'details' => $response['details'] ?? [],
        ], 400);
    }

   });

    /* // route for Projects
    Route::post('projects/update_status' , [ProjectController::class,'update_status'])->name('update_status');
    Route::post('projects/show' , [ProjectController::class,'show_project'])->name('show_project');
    Route::put('update_project' , [ProjectController::class,'update_project'])->name('update_project');
    Route::delete('destroy_project' , [ProjectController::class,'destroy_project'])->name('destroy_project');
    Route::resource('projects' , ProjectController::class);


    // route for Profile
    Route::resource('profiles' , ProfileController::class);
    // route for Billings
    Route::resource('billings' , BillingController::class);
    // route for Orders
    Route::resource('orders' , OrderController::class);
    // route for get all client orders
    Route::get('client_orders',[OrderController::class,'client_orders'])->name('client_orders');


    // route for all publisher sites for super admin
    Route::get('all_publishers',[SiteController::class,'all_publishers'])->name('all_publishers');
    Route::post('all_publishers/{search?}',[SiteController::class,'all_publishers'])->name('all_publishers_search');
    // add publisher site
    Route::get('add_publishers',[SiteController::class,'add_publishers'])->name('add_publishers');


     // Table for show projects by user : /admin/user_projects
     Route::get('/user_projects',[ProjectController::class,'user_projects'])->name('user_projects');

     // Show All Project by user : /admin/all_user_projects/2/projects
     Route::get('/all_user_projects/{user_id?}/projects',[ProjectController::class,'all_user_projects'])->name('all_user_projects');



    // super admin routes ***********************************************************************************************************************************************************
    // Get tasks by project for super admin
    Route::get('/tasks/user/{user_id}/project/{project_id}',[TaskController::class,'super_admin_task_by_user_by_project'])->name('super_admin_task_by_user_by_project');
    // open the task and start handel the task from the super admin
    Route::get('super_admin/task/{task_id?}/open_task/user/{user_id?}/project/{project_id?}',[TaskController::class,'super_admin_open_task'])->name('super_admin_open_task');

    Route::post('task/{task_id?}/{post_id}/open_task/user/{user_id?}/project/{project_id?}/task_approve_or_rejected',[TaskController::class,'task_approve_or_rejected'])->name('task_approve_or_rejected');


    // show all newtasks for super admin
    // super admin reject the task
    Route::get('task/all_new_tasks',[TaskController::class,'all_new_tasks'])->name('all_new_tasks');
    // super admin approve the task
    Route::get('task/{task_id}/super_admin_approve',[TaskController::class,'super_admin_approve'])->name('super_admin_approve');
    // super admin reject the task
    Route::get('task/{task_id}/super_admin_reject',[TaskController::class,'super_admin_reject'])->name('super_admin_reject');
    // ********************************************************************************************************************************************************************************

    // route for get all contacts
    Route::get('contacts/messages',[ContactController::class,'contacts'])->name('contacts');
    // route for Contact page
    Route::resource('contacts' , ContactController::class);


    // admin settings
    Route::get('settings',[SettingController::class,'settings'])->name('settings');
    // application settings
    Route::get('settings/application_settings',[SettingController::class,'application_settings'])->name('application_settings');


    // update paypal
    Route::put('settings/update_paypal/{user_id}',[DashboardController::class,'update_paypal'])->name('update_paypal');

    // update logo
    Route::put('settings/update_site_logo/{user_id}',[DashboardController::class,'update_site_logo'])->name('update_site_logo'); */

});
