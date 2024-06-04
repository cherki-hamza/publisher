<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    // method for publisher send website url
    public function submit_url(Request $request){
        $request->validate([
           'url' => 'url'
        ]);

        return redirect()->back()->with('success' , 'this website not real type a real website url');
    }

    // add unique website
    public function website_unique(Request $request){

    }


}
