<?php

namespace App\Http\Controllers;

use App\Mail\Client\ClientInProgressEmail;
use App\Mail\Publisher\PublisherInProgressEmail;
use App\Models\Site;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PublisherController extends Controller
{
    // method for publisher send website url
   /*  public function submit_url(Request $request){
        $request->validate([
           'url' => 'url'
        ]);

        //Session::put('user_url', $request->url);

        return redirect()->route('website_unique')->with('url',$request->url);
    } */

    // add unique website
    public function website_unique(Request $request){

        $request->validate([
            'url' => 'url'
         ]);

       // put user url to session
       session(['user_url' => $request->url]);

       $cleanUrl = str_replace(['http://', 'https://'], '', $request->url);

        $site_found =  Site::on('mysql_main_pr')->where('site_url' , $cleanUrl)->first();
        if(!empty($site_found)){
            return redirect()->back()->with('danger','The website url already exists');
        }

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
          $data['site_status'] = '2';
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
                                ->where('admin_status' , 1)
                                ->with('site')
                                ->paginate(10);

                  $tasks_count =  Task::on('mysql_main_pr')
                                    ->where('site_id' , $request->site_id)
                                    ->count();

                 $site_url = Site::on('mysql_main_pr')->where('id' , $request->site_id)->first()->site_url;

                  // close database
                  DB::purge();

      return view('pr.pr_publisher.publisher_site_tasks' , compact('tasks','tasks_count','site_url'));
    }

    // private method for get tasks from content  by user_id in pr
    private function get_tasks($request = null){
        return Task::on('mysql_main_pr')
                    ->where('pr_user_id' , auth()->user()->id)
                    //->where('order_id' , auth()->user()->id)
                    ->where('status', 0)
                    ->where('task_status', 0)
                    ->with('site')->paginate(10);
    }


     // private method for get tasks by status from content  by user_id in pr
     private function get_tasks_with_status($status = null){
        return Task::on('mysql_main_pr')
            ->where('pr_user_id' , auth()->user()->id)
            ->where('status' , $status)
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

        $post = [];

        if($task != null && $task->task_type == 'c_p'){

            return view('pr.pr_publisher.task.show_task_c_p' , compact('task' , 'post'));

        }else{

            $task = Task::on('mysql_main_pr')
            ->where('id' , $request->task_id)
            ->where('site_id' , $request->site_id)
            ->where('pr_user_id' , $request->user_id)
            ->where('task_type' , 'c_c_p')
            ->with('site','post')->first();

            $post = $task->post;

            return view('pr.pr_publisher.task.show_task_c_c_p' , compact('task' , 'post'));

        }


    }

    // method for publisher approve task from guest client
    public function publisher_approve_task(Request $request){
       $task = Task::on('mysql_main_pr')
                    ->where('id' , $request->task_id)
                    ->first();
       if(!empty($task)){

          $task->update([
            'publisher_status' => 1,
            'p_status'         => 1,
        ]);

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

        $task->update([
            'publisher_status' => 0,
            'p_status'         => 0,
        ]);

          return redirect()->back()->with('success' , 'Your Reject The Task');
       }else{
          return redirect()->back()->with('danger' , 'Oops there is a problem in the server Please contact the support departement');
       }
    }

    // method for the open tasks
    public function opentasks(){
        $tasks = $this->get_tasks();

       // return $tasks;

       return view('pr.pr_publisher.tasks.opentasks' , compact('tasks'));
    }

    // method for publisher open the task
    public function publisher_open_task(Request $request){
        $task = Task::on('mysql_main_pr')
                    ->where('id' , $request->task_id)->with('site','post')
                    ->first();

        $post =  $task->post;

        if(!empty($task->task_type)){

             if($task->task_type == 'c_c_p'){
                // if task type is content creation and publishion c_c_p
                return view('pr.pr_publisher.do_task.ccp_task' , compact('task','post'));
             }else{
                // if task type is content  publishion c_p
                return view('pr.pr_publisher.do_task.cp_task' , compact('task','post'));
             }

        }else{
            return redirect()->back()->with('danger' , 'Oops there is problem in the server please contact the support');
        }
    }


    // method for publisher store the task
    public function publisher_start_task(Request $request){
      $task = Task::on('mysql_main_pr')
                  ->where('id' , $request->task_id)
                  ->firstOrFail();

    // return $task->order;

    $task->update([
        'status'       => 1,
        'task_status'  => 1,
    ]);
    $task->order->update(['status' => 1]);

    $client_email = User::on('mysql_main_pr')->where('id' , $task->user_id)->first()->email;

    // send email for task to the client
    Mail::to($client_email)->send(new ClientInProgressEmail($task));

    // deconnect the connection
    DB::purge();


    $publisher_email = User::where('id' , $task->pr_user_id)->first()->email;

    // send email for task to the publisher
    Mail::to($publisher_email)->send(new PublisherInProgressEmail($task));



      return redirect()->back()->with('success' , 'Task started with successs and the Status its is in Progress');
    }


    // method for publisher update task url
    public function publisher_handele_task(Request $request){



         // make the task in progress
        if($request->input('action') == 'in_progress'){

            $task = Task::on('mysql_main_pr')
                  ->where('id' , $request->task_id)
                  ->firstOrFail();


            $task->update([
                'status'       => 1,
                'task_status'  => 1,
            ]);
            $task->order->update(['status' => 1]);

            $client_email = User::on('mysql_main_pr')->where('id' , $task->user_id)->first()->email;

            // send email for task to the client
            Mail::to($client_email)->send(new ClientInProgressEmail($task));

            // deconnect the connection
            DB::purge();


            $publisher_email = User::where('id' , $task->pr_user_id)->first()->email;

            // send email for task to the publisher
            Mail::to($publisher_email)->send(new PublisherInProgressEmail($task));

            return redirect()->back()->with('success' , 'Task started with successs and the Status its is in Progress');

        }

        // update task url
        if($request->input('action') == 'update_task_url'){

            $task = Task::on('mysql_main_pr')
                  ->where('id' , $request->task_id)
                  ->firstOrFail();

            $task->update([
                'task_post_placement_url' =>  $request->post_placement_url,
                'task_editor_data'        =>  $request->post_editor_data
            ]);


            return redirect()->back()->with('success' , 'Task URL Updated successfuly');

        }

        if($request->input('action') == 'complete_task'){

            $task = Task::on('mysql_main_pr')
                        ->where('id' , $request->task_id)
                        ->firstOrFail();

            $task->update([
                'status'       => 5,
                'task_status'  => 5,
            ]);

            $task->order->update(['status' => 5]);

            $client_email = User::on('mysql_main_pr')->where('id' , $task->user_id)->first()->email;

            // send email for task to the client
            Mail::to($client_email)->send(new ClientInProgressEmail($task));

            // deconnect the connection
            DB::purge();

            return redirect()->back()->with('success' , 'Task Completed  & Send Email To client');

        }

    }

    // method for task_in_progress
    public function task_in_progress(Request $request){
        $tasks = $this->get_tasks_with_status(1);
        return view('pr.pr_publisher.tasks.task_in_progress',compact('tasks'));
     }


     // method for task_pending_approval

     public function task_pending_approval(Request $request){
        $tasks = $this->get_tasks_with_status(2);
        return view('pr.pr_publisher.tasks.task_pending_approval',compact('tasks'));
    }

    // method for task_improvement
    public function task_improvement(Request $request){
        $tasks = $this->get_tasks_with_status(4);
        return view('pr.pr_publisher.tasks.task_improvement',compact('tasks'));
    }

    // method for task_waiting_approval
    public function task_waiting_approval(Request $request){
        $tasks = $this->get_tasks_with_status(2);
        return view('pr.pr_publisher.tasks.task_waiting_approval',compact('tasks'));
    }

    // method for task_completed
    public function task_completed(Request $request){
        $tasks = $this->get_tasks_with_status(5);
        return view('pr.pr_publisher.tasks.task_completed',compact('tasks'));
    }

    // method for task_rejected
    public function task_rejected(Request $request){
        $tasks = $this->get_tasks_with_status(6);
        return view('pr.pr_publisher.tasks.task_rejected',compact('tasks'));
    }


}
