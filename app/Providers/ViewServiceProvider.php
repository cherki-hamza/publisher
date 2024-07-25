<?php

namespace App\Providers;

use App\Models\Notification;
use App\Models\Payment;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        //$projects = Project::where('user_id' , auth()->id())->where('status' , 1)->get();
       // if($projects){
            //view::share('projects', $projects);  // where('user_id' , auth()->id())->
            View::composer('*', function ($view) {
                if(auth()->check()){
                    if( (auth()->user()->role == 'client') ){
                        $view->with('projects', Project::where('user_id',auth()->id())->where('status' , 1)->paginate(12));
                        $view->with('notifications_count',  '');
                        $view->with('notifications', '');
                    }else{
                        $view->with('projects', Project::where('status' , 1)->paginate(12));
                        $view->with('notifications_count',  '');
                        $view->with('notifications', '');
                        if(auth()->user()->role == 'super-admin'){
                            $view->with('notifications_count', Notification::Notification_Witing() ??  []);
                            $view->with('notifications', Notification::where('is_read',0)->orderBy('id','DESC')->get() ??  []);
                        }
                    }

                    if(!empty(auth()->user()->payments) /* && auth()->user()->role == 'client' */){

                        $auth_user_payments = Payment::where('user_id', auth()->id())->sum('amount');   // 20000
                        $task_site_prices = Task::where('user_id' , auth()->id())/* ->where('task_status',0) */->sum('task_price'); //  15100
                        $balance = ((int)$auth_user_payments - $task_site_prices);  // 20000  - 15100 == 4900 and  include reserved
                        $reserved = Task::where('user_id' , auth()->id())->whereNot('task_status',5)->sum('task_price');
                        $view->with(['balance' => $balance , 'reserved' => $reserved ]);

                        /* echo '<pre>';
                        dd($task_site_prices);
                        echo '<pre>'; */

                    }else{
                        $balance = Payment::sum('amount');
                        $view->with('balance', $balance);
                    }
                }

            });

           /*  View::composer('*', function ($view) {
                $view->with('data', 'test hamza');
            }); */
       // }


    }
}
