<?php

use App\Http\Controllers\Backend\BalanceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\Backend\SiteController;
use App\Http\Controllers\Backend\BillingController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\Payment\PaypalController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\TaskController;
use App\Models\Site;
use App\Models\User;
use App\Notifications\EmailNotification;
use App\Notifications\SmsNotification;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Stmt\TryCatch;
use SheetDB\SheetDB;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Notification;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





    Route::get('/', function () {

        $sites = Site::all();
        return view('site' , compact('sites'));
    })->name('index');


