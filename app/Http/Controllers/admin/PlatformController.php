<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    // index method
    public function index(){
      return view('pr.pr_publisher.platform');
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
