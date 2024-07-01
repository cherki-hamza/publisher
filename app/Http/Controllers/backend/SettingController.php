<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\PaypalVerificationMail;
use App\Models\Billing;
use App\Models\PublisherTaskPayment;
use App\Models\PublisherVerify;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class SettingController extends Controller
{

     // index settinges page for users settings
     public function settings(){
        $user_billing = Billing::where('user_id', auth()->user()->id)->first();
        return view('admin.settings.settings' , compact('user_billing'));
    }


    // index settinges page for application settings
    public function application_settings(){
        $app_settings = [];
        return view('admin.settings.application_settings' , compact('app_settings'));
    }

    // method for publisher balnce
    public function publisher_balance(Request $request){


        if(empty(PublisherVerify::where('user_id',auth()->user()->id)->first()) && auth()->user()->role !== 'super-admin' ){

            PublisherVerify::updateOrCreate(
                ['user_id' => auth()->user()->id],
                [
                    'user_id' => auth()->user()->id,
                ]
            );

            if(PublisherVerify::where('user_id',auth()->user()->id)->first()->is_verified == 0 && auth()->user()->role !== 'super-admin' && auth()->user()->role == 'publisher'){
                PublisherVerify::updateOrCreate(
                    ['user_id' => auth()->user()->id],
                    [
                        'user_id' => auth()->user()->id,
                    ]
                );
            }
           return redirect()->route('verify_email')->with('warning','Please Enter Your Paypal Email');

        }elseif(auth()->user()->role == 'super-admin'){
             //  $publisher = User:: on('mysql_main_pr')->where('pr_user_id' , request()->publisher_id);
            $publisher = User::where('id', request()->publisher_id)->first();

            $tasks_count = Task::on('mysql_main_pr')->where('status',5)->sum('task_price');
            $paypal_vat = ($tasks_count*10/100);
            //$publisher_balance = ($tasks_count - $paypal_vat);

            $publisher_balance = PublisherTaskPayment::where('publisher_id' , auth()->user()->id)->sum('publisher_payment');

            $payements_ids = PublisherTaskPayment::where('publisher_id' , auth()->user()->id)->pluck('id');

            $publisher_balance_waiting = Task::on('mysql_main_pr')->where('pr_user_id' , auth()->user()->id)->whereNotIn('id' , $payements_ids)->where('status',5)->sum('task_price');

            return view('admin.balance.super_admin_publisher_blance' , compact('tasks_count','paypal_vat','publisher_balance','publisher_balance_waiting'));

        }else{

               //  $publisher = User:: on('mysql_main_pr')->where('pr_user_id' , request()->publisher_id);
                $publisher = User::where('id', request()->publisher_id)->first();

                $tasks_count = Task::on('mysql_main_pr')->where('pr_user_id' , auth()->user()->id)->where('status',5)->sum('task_price');
                $paypal_vat = ($tasks_count*10/100);
                //$publisher_balance = ($tasks_count - $paypal_vat);

                $publisher_balance = PublisherTaskPayment::where('publisher_id' , auth()->user()->id)->sum('publisher_payment');

                $payements_ids = PublisherTaskPayment::where('publisher_id' , auth()->user()->id)->pluck('id');

                $publisher_balance_waiting = Task::on('mysql_main_pr')->where('pr_user_id' , auth()->user()->id)->whereNotIn('id' , $payements_ids)->where('status',5)->sum('task_price');

              /* return $publisher_balance_waiting; */
              return view('admin.balance.publisher_blance' , compact('tasks_count','paypal_vat','publisher_balance','publisher_balance_waiting'));
        }



    }

    // method for publisher verify paypal email
    public function verify_email(Request $request){
        $publisher = PublisherVerify::where('user_id',auth()->user()->id)->first();
        return view('pr.pr_publisher.blance.verify_email',compact('publisher'));
    }

    // method for store paypal email
    public function store_paypal_email(Request $request){

        $request->validate(['email_verify' =>  'required']);

        $publisher_verify = PublisherVerify::where('user_id',auth()->user()->id)->first();

        if(!empty($publisher_verify)){

            $publisher_verify->update([
                'paypal_email' => $request->email_verify,
                'verification_code' => Str::random(8),
            ]);

            $user =  auth()->user()->update(['paypal_email' => $request->email_verify]);

            $publisher = PublisherVerify::where('user_id',auth()->user()->id)->first();

            // send email
            Mail::to($request->email_verify)->send(new PaypalVerificationMail($publisher));

            return redirect()->route('verify_email')->with('info','Please Enter the verify code & verify');

        }else{
            return redirect()->route('verify_email')->with('danger','Oops samthing wrong, contact pr team..');
        }


    }

    // method for publisher verify code
    public function publisher_verify_code(Request $request){

        $publisher = PublisherVerify::where('user_id',auth()->user()->id)->first();

        if($publisher){

            if($publisher->verification_code == $request->code){

                $publisher->is_verified = true;
                $publisher->verification_code = null;
                $publisher->save();

                return redirect()->route('publisher_balance')->with('success', 'Your Paypal Email verified successfully!');

           }else{
                return redirect()->back()->with('error', 'Invalid verification code.');
           }

        }


    }


    // method for show the publisherFAQ
    public function publisher_faq(){
        return view('admin.user.publisher_faq');
    }
}
