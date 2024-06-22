<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\CompletedTaskEmail;
use App\Mail\InProgressTaskEmail;
use App\Mail\PendingApprovalTaskEmail;
use App\Mail\RejectedTaskEmail;
use App\Models\Post;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    //

        // method for store the post
        public function store_post(Request $request){

            if($request->input('action') == 'in_progress' ){



                // validate the post data
                $request->validate([
                    'post_editor_data' => 'required',
                ]);

                // find the related task and update the status
                $task = Task::on('mysql_main_pr')->where('id',$request->task_id)->firstOrFail();


                // store the data in the database
                $post = Post::on('mysql_main_pr')->create([
                    'user_id'           => auth()->id(),
                    'project_id'        => $task->project_id,
                    'site_id'           => $request->site_id,
                    'task_id'           => $request->task_id,
                    'status'            => Post::IN_PROGRESS,
                    'post_title'        => $request->post_placement_url,
                    'post_body'         => $request->get('post_editor_data'),
                ]);

                $task->update(['status'=> Post::IN_PROGRESS]);

                $task->order->update([
                    'status'  => Task::IN_PROGRESS,
                 ]);

                 // deconnect the connection
                 DB::purge();


                Mail::to($task->user->email)->send(new InProgressTaskEmail($task));

                // go the the prgress page
                return redirect()->back()->with('success' , 'The post created with success, And The Status is IN PROGRESS');
            }


            if($request->input('action') == 'client_approval' ){
                 // validate the post data
                 $request->validate([
                    'post_editor_data' => 'required',
                ]);

                // find the related task and update the status
                $task = Task::on('mysql_main_pr')->where('id',$request->task_id)->firstOrFail();

                // store the data in the database

                $post = Post::on('mysql_main_pr')->create([
                    'user_id'           => auth()->id(),
                    'project_id'        => $task->project_id,
                    'site_id'           => $request->site_id,
                    'task_id'           => $request->task_id,
                    'status'            => Post::PENDING_APPROVAL,
                    'post_title'        => $request->post_placement_url,
                    'post_body'         => $request->get('post_editor_data'),
                ]);

                $task->update(['status'=> Post::PENDING_APPROVAL]);

                $task->order->update([
                    'status'  => Task::PENDING_APPROVAL,
                 ]);

                 // deconnect the connection
                 DB::purge();


                Mail::to($task->user->email)->send(new PendingApprovalTaskEmail($task));

                // go the the prgress page
                return redirect()->back()->with('warning' , 'The post created with success, And The Status nedd PENDING APPROVAL ');
            }

        }//end store_post

        // method for update the post by task
        // method for update the post by task
        public function update_post(Request $request){

            // super admin in_progress
            if($request->input('action') == 'in_progress' ){

                // validate the post data
                $request->validate([
                    'post_editor_data' => 'required',
                ]);
                // find the post by id the post
                $post = Post::on('mysql_main_pr')->where('id',$request->post_id)->firstOrFail();

                if(!empty($post)){
                 // update the post
                $post->update([
                    'status'     => Post::IN_PROGRESS,
                    'post_title' => $request->post_placement_url,
                    'post_body'  => $request->get('post_editor_data'),
                ]);
                }


                // find the related task and update the status
                $task = Task::on('mysql_main_pr')->where('id',$request->task_id)->firstOrFail();

                if(!empty($task)){
                    $task->update([
                        'status'=> Post::IN_PROGRESS,
                        'task_status'=> Post::IN_PROGRESS,
                        'task_post_placement_url' => $request->post_placement_url,
                    ]);

                    $task->order->update([
                        'status'  => Task::IN_PROGRESS,
                     ]);
                }

                // deconnect the connection
                DB::purge();



                Mail::to($task->user->email)->send(new InProgressTaskEmail($task));

                // go the the prgress page
                return redirect()->back()->with('info' , 'The Task updated with success, And The Status is IN PROGRESS');
            }

            // super admin send to client pending approve
            if($request->input('action') == 'client_approval' ){

                // validate the post data
                $request->validate([
                    'post_editor_data' => 'required',
                ]);
                // find the post by id the post
                $post = Post::on('mysql_main_pr')->where('id',$request->post_id)->firstOrFail();
                // update the post
                $post->update([
                    'status'     => Post::PENDING_APPROVAL,
                    'post_title' => $request->post_placement_url,
                    'post_body'  => $request->get('post_editor_data'),
                ]);

                // find the related task and update the status
                $task = Task::on('mysql_main_pr')->where('id',$request->task_id)->firstOrFail();
                $task->update([
                    'status'=> Post::PENDING_APPROVAL,
                    'task_post_placement_url' => $request->post_placement_url,
                ]);

                $task->order->update([
                    'status'  => Task::PENDING_APPROVAL,
                 ]);

                 // deconnect the connection
                  DB::purge();


                Mail::to($task->user->email)->send(new PendingApprovalTaskEmail($task));

                // go the the prgress page
                return redirect()->back()->with('warning' , 'The post updated and  Sending tho the client with success, And The Status nedd  APPROVAL from Client ');

            }

            // super admin task completed
            if($request->input('action') == 'publisher_approval' ){


                // find the post by id the post
                $post = Post::on('mysql_main_pr')->where('id',$request->post_id)->firstOrFail();
                // update the post
                $post->update([
                    'status'     => Post::COMPLETED,
                ]);

                // find the related task and update the status
                $task = Task::on('mysql_main_pr')->where('id',$request->task_id)->firstOrFail();
                $task->update([
                    'status'=> Task::COMPLETED,
                    'task_status'=> Task::COMPLETED,
                    'task_post_placement_url' => $request->post_placement_url,
                ]);

                $task->order->update([
                    'status'  => Task::COMPLETED,
                 ]);

                Mail::to($task->user->email)->send(new CompletedTaskEmail($task));

                // deconnect the connection
                DB::purge();


                // go the the prgress page
                return redirect()->back()->with('info' , 'The Post is Approves with success From The PR Team And From The Publisher And The Email Sending To The client');
            }


            // super admin task Rejected
            if($request->input('action') == 'publisher_reject' ){


                // find the post by id the post
                $post = Post::on('mysql_main_pr')->where('id',$request->post_id)->firstOrFail();
                // update the post
                $post->update([
                    'status'     => Post::REJECTED,
                ]);

                // find the related task and update the status
                $task = Task::on('mysql_main_pr')->where('id',$request->task_id)->firstOrFail();
                $task->update([
                    'status'=> Task::REJECTED,
                    'task_status'=> Task::REJECTED
                ]);

                $task->order->update([
                    'status'  => Task::REJECTED,
                 ]);

                Mail::to($task->user->email)->send(new RejectedTaskEmail($task));

                // deconnect the connection
                DB::purge();


                // go the the prgress page
                return redirect()->back()->with('info' , 'The Post is Rejected From The Publisher And The Email Sending To The client');
            }

        }//end update_post
}
