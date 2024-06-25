<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Site;
use App\Models\Task;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    // index method
    public function index(Request $request){

      // check if publisher has at list one site
      $tasks =  Task::on('mysql_main_pr')
                    ->where('site_id' , $request->site_id)
                    ->where('admin_status' , 1)
                    ->with('site')->get();

                  $tasks_count =  Task::on('mysql_main_pr')
                    ->where('admin_status' , 1)
                    ->where('site_id' , $request->site_id)
                    ->count();

                    $websites_approved = Site::where('site_status','1')->count();
                    $query = Task::on('mysql_main_pr')->newQuery();
                    $task_completed = $query->where('admin_status' , 1)->where('status' , 5)->count();
                    $tasks_rejected = $query->where('admin_status' , 1)->where('status' , 6)->count();
                    $tasks_in_progress = $query->where('admin_status' , 1)->where('status' , 1)->count();
                    $tasks_awaiting = $query->where('admin_status' , 1)->where('status' , 2)->count();

      $sites = Site::on('mysql_main_pr')->where('user_id',auth()->user()->id)->paginate(10);
      if($sites->count() >= 1){
        return view('pr.pr_publisher.performers', compact('sites', 'tasks' , 'tasks_count','task_completed','tasks_rejected','tasks_in_progress','tasks_awaiting','websites_approved'));
      }else{
        return view('pr.pr_publisher.platform');
      }

    }

    // method for show the page requirements
    public function websites_requirements(){
        return view('pr.pr_publisher.websites_requirements');
    }

    // method for verify unique
    public function verify_unique(){
        return view('pr.pr_publisher.verify_unique');
    }


}
