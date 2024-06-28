<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Site;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    // get all clients tasks
    public function clients_tasks(){
        $data = User::paginate(10);

        return view('pr.pr_superadmin.clients_tasks' , compact('data'));
    }

    // get tasks for every site by  and get the user data
    public function publisher_sites(Request $request){
        $site_user = User::where('id' , $request->user_id)->first();
        $sites= Site::on('mysql_main_pr')
                    ->where('user_id' , $request->user_id)
                    ->where('site_status' , '1')
                    ->with(['tasks' =>  function ($query) {
                        $query->where('admin_status', 1);
                    }])->get();
         // close connection
         DB::purge();
        return view('pr.pr_superadmin.publisher_sites' , compact('sites'));

    }

    // method for get the publisher tasks by site
    public function publisher_site_tasks(Request $request){
        $tasks = Task::on('mysql_main_pr')
                    ->where('site_id' , $request->site_id)
                    ->where('pr_user_id' , $request->user_id)
                    ->where('c_status' , 1)
                    ->get();

         // close connection
         DB::purge();
       return view('pr.pr_superadmin.publisher_site_tasks' , compact('tasks'));
    }


    // method for show single task by id
    public function admin_show_task(Request $request){

        $task = Task::on('mysql_main_pr')
                    ->where('id' , $request->task_id)
                    ->firstOrFail();
        // close connection
        DB::purge();

        if(!empty($task)){
            if($task->task_type == 'c_c_p'){
               return view('pr.pr_publisher.task.show_task_c_c_p' , compact('task'));
            }else{
                return view('pr.pr_publisher.task.show_task_c_p' , compact('task'));
            }
        }
    }

    // method for super admin approve task
    public function admin_approve_task(Request $request){
       $task = Task::on('mysql_main_pr')
                    ->where('id' , $request->task_id)
                    ->firstOrFail();
      $task->update([
        'admin_status' => 1,
    ]);
      // close connection
      DB::purge();
      return redirect()->back()->with('success' , "Task Approved and send To publisher https://".$task->site->site_url);
    }

    // method for super admin approve task
    public function admin_reject_task(Request $request){
        $task = Task::on('mysql_main_pr')
                    ->where('id' , $request->task_id)
                    ->firstOrFail();
        $task->update([
            'admin_status' => 0,

        ]);
        // close connection
        DB::purge();
        return redirect()->back()->with('danger' , 'Task Rejected with success');
    }

    // method for reset the task
    public function admin_reset_task(Request $request){
        $task = Task::on('mysql_main_pr')
                    ->where('id' , $request->task_id)
                    ->firstOrFail();

        $task->update([
            'status' => 1,
            'task_status' => 1,
            'p_status' => 1,
            'publisher_status' => 1,
            'task_status' => 1,
        ]);

        // get the order
         $task->order->update([ 'status' => 1]);

        // close connection
        DB::purge();
        return redirect()->back()->with('warning' , 'Task Reset Successfoly');
    }


}
