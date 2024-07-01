<?php

namespace App\Http\Controllers;

use App\Mail\SendMoneyToPublisher;
use App\Models\PublisherTaskPayment;
use App\Models\Task;
use App\Models\User;
use App\Services\PayPalService;
use Flasher\Laravel\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Stmt\TryCatch;

use function Ramsey\Uuid\v1;

class DashboardController extends Controller
{
   // methode for index admin
   public function index(){

       $super_admin_balance = Task::on('mysql_main_pr')->where('status',5)->sum('task_price');

       $super_admin_tasks_completed = Task::on('mysql_main_pr')->where('status',5)->count();

   if(auth()->user()->role == 'super-admin'){
        return view('pr.pr_superadmin.publisher_dashboard',compact('super_admin_tasks_completed','super_admin_balance'));
    }else{
        $publisher_balance = PublisherTaskPayment::where('publisher_id' , auth()->user()->id)->sum('publisher_payment');
        $payements_ids = PublisherTaskPayment::where('publisher_id' , auth()->user()->id)->pluck('id');
        $publisher_balance_waiting = Task::on('mysql_main_pr')->where('pr_user_id' , auth()->user()->id)->whereNotIn('id' ,[1,2])->where('status',5)->sum('task_price');
        return view('pr.pr_publisher.publisher_dashboard',compact('publisher_balance','publisher_balance_waiting'));
    }
   }

   // method for show the publishers balance
   public function publishers_balance(){
    $publishers = User::where('type' , 'publisher')->paginate(10);
    return view('pr.pr_superadmin.publishers_balance',compact('publishers'));
   }

   // method for show the completed tasks for publisher by details
   public function publicher_completed_tasks(){
      $publisher = User::where('id' , request()->publisher_id)->first();
      //return $publisher;

      $tasks = Task::on('mysql_main_pr')->where('pr_user_id' , request()->publisher_id )->where('status',5)->whereNotIn('id' , PublisherTaskPayment::where('publisher_id' , $publisher->id)->pluck('task_id'))->with('order')->paginate(10);
      $payment_count  =  Task::on('mysql_main_pr')->where('pr_user_id' , request()->publisher_id )->whereNotIn('id' , PublisherTaskPayment::where('publisher_id' , $publisher->id)->pluck('task_id'))->where('status',5)->sum('task_price');

      return view('pr.pr_superadmin.publicher_completed_tasks',compact('tasks','publisher','payment_count'));

   }

   // method for show the withdrow page by publisher id
   public function get_payements(Request $request){
     $publisher = User::where('id', request()->publisher_id)->first();
     $tasks = Task::on('mysql_main_pr')->where('pr_user_id' , request()->publisher_id )->where('status',5)->with('order')->paginate(10);
     $payment_count  =  Task::on('mysql_main_pr')->where('pr_user_id' , request()->publisher_id )->where('status',5)->sum('task_price');
     return view('pr.pr_superadmin.publicher_payment_to_send',compact('publisher','tasks','payment_count'));
   }

   // method for send payment
   public function send_payements(Request $request){

    $publisher = User::where('id', request()->publisher_id)->first();
    $tasks = Task::on('mysql_main_pr')->where('pr_user_id' , request()->publisher_id )->where('status',5)->with('order')->get();
    $payment_count  =  Task::on('mysql_main_pr')->where('pr_user_id' , request()->publisher_id )->where('status',5)->sum('task_price');


    $tasks_ids = Task::on('mysql_main_pr')->where('pr_user_id' , request()->publisher_id )->where('status',5)->pluck('id');
    $tasks_ids_array = $tasks_ids->toArray();



    try {

        $payPalService = new PayPalService();

        $recipientEmail = 'sb-slusi29851342@business.example.com'; //$publisher->email;
        $amount_10_percent = (($payment_count*10)/100);
        $amount = ($payment_count - $amount_10_percent);

       // return [$amount_10_percent ,$amount];
        $currency = 'USD';

        $response = $payPalService->sendMoney($recipientEmail, $amount, $currency);



         $result = $response['batch_header']['batch_status'];



         if($result = 'SUCCESS'){

            foreach($tasks as $task){
            // save PublisherTaskPayment in database in Main PR Content
                PublisherTaskPayment::on('mysql_main_pr')->create([
                    'user_id' => $task->user_id,
                    'publisher_id' => $publisher->id,
                    'publisher_payment_no_vat' =>  $task->task_price,
                    'publisher_payment_paypal_vat' => (($task->task_price * 10)/100),
                    'publisher_payment' => ($task->task_price - (($task->task_price * 10)/100)),
                    'task_id' => $task->id,
                    'status' => 1
                ]);

                // save PublisherTaskPayment in database in publisher
                $publisherTaskPayment = new PublisherTaskPayment();
                $publisherTaskPayment->user_id = $task->user_id;
                $publisherTaskPayment->publisher_id  =  $publisher->id;
                $publisherTaskPayment->publisher_payment_no_vat  =  $task->task_price;
                $publisherTaskPayment->publisher_payment_paypal_vat  = (($task->task_price * 10)/100);
                $publisherTaskPayment->publisher_payment =  ($task->task_price - (($task->task_price * 10)/100));
                $publisherTaskPayment->task_id  = $task->id;
                $publisherTaskPayment->status =  1;
                $publisherTaskPayment->save();
            }
            // send email to publisher with invoice
             Mail::to($publisher->email)->send(new SendMoneyToPublisher($publisher,$tasks,$payment_count));
             return redirect()->route('publishers_balance')->with('success' , 'Your Payment by paypal send with success');
         }

    } catch (\Throwable $th) {
        //return response()->json($th->getMessage());
        return redirect()->back()->with('danger' , 'Oops there is somthing in the server contact OTT Developers Team.');
    }


   }


}
