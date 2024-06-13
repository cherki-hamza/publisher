<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PublisherController extends Controller
{
    // method for publisher send website url
    public function submit_url(Request $request){
        $request->validate([
           'url' => 'url'
        ]);

        //Session::put('user_url', $request->url);

        return redirect()->route('website_unique')->with('url',$request->url);
    }

    // add unique website
    public function website_unique(Request $request){

        $request->validate([
            'url' => 'url'
         ]);

       // put user url to session
       session(['user_url' => $request->url]);


       return view('pr.pr_publisher.website_unique');
    }

    // method for store publisher website
    public function store_site(Request $request){

        $url = session()->get('user_url');

        if(empty($url)){
            return redirect()->route('platform_index')->with('danger' , 'The url its Required And important');
        }

        //return $request->all();


         $result =  $request->validate([
                'site_url'              => 'required|url|unique:sites,site_url',
                'site_category'         => 'required',
                'site_monthly_traffic'  => 'required|numeric',
                'site_domain_authority' => 'required|numeric',
                'site_domain_rating'    => 'required|numeric',
                'site_language'         => 'required',
                'site_dofollow'         => 'required',
                'site_c_p_price'        =>'required|numeric',
                'site_c_c_p_price'      => 'required|numeric',
                'site_time'             => 'required',
                'site_link_allow'       => 'required',
                'site_sposored'         => 'required',
                'site_indexed'           => 'required',
                'word_limite'           => 'required',
                'spam_score'            => 'required',
                'word_limite'           => 'required',
                'special_requirement'   => 'required',
          ]);

          //return $result;


          $data = [
            'user_id'               => auth()->id(),
            'site_url'              => preg_replace("(^https?://)", "", $url),
            'site_category'         => $request->site_category,
            'site_monthly_traffic'  => $request->site_monthly_traffic,
            'site_domain_rating'    => $request->site_domain_rating,
            'site_domain_authority' => $request->site_domain_authority,
            'site_language'         => $request->site_language,
            'site_dofollow'         => $request->site_dofollow,
            'site_c_p_price'        => $request->site_c_p_price,
            'site_c_c_p_price'      => $request->site_c_c_p_price,
            'site_time'             => $request->site_time,
            'site_link_allow'       => $request->site_link_allow,
            'site_sposored'         => $request->site_sposored,
            'site_indexed'          => $request->site_index,
            'word_limite'           => $request->word_limite,
            'spam_score'            => $request->spam_score,
            'word_limite'           => $request->word_limite,
            'special_requirement'   => $request->special_requirement,
          ];

          $site =  Site::create($data);

          // add pr_site_id and pr_user_id to the pr content main
          $data['pr_site_id'] = $site->id;
          $data['pr_user_id'] = $site->user_id;
          // create the publisher site to the main database main pr content
          //DB::connection('mysql_main_pr')->table('sites')->insert($data);

          Site::on('mysql_main_pr')->create($data);



          session()->forget('user_url');

          return redirect()->route('platform_index')->with('success','Your Website Sending with success and witing for review..');

    }

    // method for get the performers site and publishers
    public function performers(){

        $sites = Site::all();
        return view('pr.pr_publisher.performers',compact('sites'));
    }

    // method for delete site with soft delete
    public function destroy_site(Request $request){

      $site = Site::where('id' , $request->site_id)->first();
      if(!empty($site)){
         $site->delete();
         return redirect()->route('platform_index')->with('success','Site Deleted with success');
      }

      return redirect()->route('platform_index')->with('danger','Oops site note deleted');

    }

    // show the publisher tasks from the pr content
    public function site_tasks(Request $request){
        // get the tasks from main pr content
       /* $tasks = DB::connection('mysql_main_pr')->table('tasks')
                  ->where('site_id' , $request->site_id)->with('site')
                  ->get(); */

                  $tasks =  Task::on('mysql_main_pr')
                    ->where('site_id' , $request->site_id)
                    ->with('site')->paginate(10);

                  $tasks_count =  Task::on('mysql_main_pr')
                    ->where('site_id' , $request->site_id)
                    ->count();

                 $site_url = Site::on('mysql_main_pr')->where('id' , $request->site_id)->first()->site_url;

      return view('pr.pr_publisher.publisher_site_tasks' , compact('tasks','tasks_count','site_url'));
    }

    // private method for get tasks from content  by user_id in pr
    private function get_tasks($request = null){
        return Task::on('mysql_main_pr')
            ->where('pr_user_id' , auth()->user()->id)
            //->where('order_id' , auth()->user()->id)
            ->where('status' , 0)
            ->where('task_status' , 0)
            ->with('site')->paginate(10);
    }

    // show the task
    public function show_task(Request $request){


        $task = Task::on('mysql_main_pr')
        ->where('id' , $request->task_id)
        ->where('site_id' , $request->site_id)
        ->where('pr_user_id' , $request->user_id)
        ->where('task_type' , 'c_p')
        ->with('site')->first();

        if($task != null && $task->task_type == 'c_p'){

            return view('pr.pr_publisher.task.show_task_c_p' , compact('task'));

        }else{

            $task = Task::on('mysql_main_pr')
            ->where('id' , $request->task_id)
            ->where('site_id' , $request->site_id)
            ->where('pr_user_id' , $request->user_id)
            ->where('task_type' , 'c_c_p')
            ->with('site')->first();

            return view('pr.pr_publisher.task.show_task_c_c_p' , compact('task'));

        }


    }

    // method for publisher approve task from guest client
    public function publisher_approve_task(Request $request){
       $task = Task::on('mysql_main_pr')
                    ->where('id' , $request->task_id)
                    ->first();
       if(!empty($task)){

          return $task;

          return redirect()->back()->with('success' , 'Your Approve The Task');
       }else{
          return redirect()->back()->with('danger' , 'Oops there is a problem in the server Please contact the support departement');
       }
    }

    // method for publisher reject task from guest client
    public function publisher_reject_task(Request $request){
        $task = Task::on('mysql_main_pr')
                    ->where('id' , $request->task_id)
                    ->first();
       if(!empty($task)){

          return $task;

          return redirect()->back()->with('success' , 'Your Reject The Task');
       }else{
          return redirect()->back()->with('danger' , 'Oops there is a problem in the server Please contact the support departement');
       }
    }

    // method for the open tasks
    public function opentasks(){
        $tasks = $this->get_tasks();

       return view('pr.pr_publisher.tasks.opentasks' , compact('tasks'));
    }

    // method for task_in_progress
    public function task_in_progress(Request $request){
        $tasks = $this->get_tasks();
        return view('pr.pr_publisher.tasks.task_in_progress',compact('tasks'));
     }


     // method for task_pending_approval

     public function task_pending_approval(Request $request){
        $tasks = $this->get_tasks();
        return view('pr.pr_publisher.tasks.task_pending_approval',compact('tasks'));
    }

    // method for task_improvement
    public function task_improvement(Request $request){
        $tasks = $this->get_tasks();
        return view('pr.pr_publisher.tasks.task_improvement',compact('tasks'));
    }

    // method for task_waiting_approval
    public function task_waiting_approval(Request $request){
        $tasks = $this->get_tasks();
        return view('pr.pr_publisher.tasks.task_waiting_approval',compact('tasks'));
    }

    // method for task_completed
    public function task_completed(Request $request){
        $tasks = $this->get_tasks();
        return view('pr.pr_publisher.tasks.task_completed',compact('tasks'));
    }

    // method for task_rejected
    public function task_rejected(Request $request){
        $tasks = $this->get_tasks();
        return view('pr.pr_publisher.tasks.task_rejected',compact('tasks'));
    }


}
