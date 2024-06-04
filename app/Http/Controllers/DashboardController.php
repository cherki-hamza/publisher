<?php

namespace App\Http\Controllers;


class DashboardController extends Controller
{
   // methode for index admin
   public function index(){

   if(auth()->user()->role == 'super-admin'){
        return view('pr.pr_superadmin.publisher_dashboard');
    }else{
        return view('pr.pr_publisher.publisher_dashboard');
    }
   }


}
