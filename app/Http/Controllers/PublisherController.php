<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;
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



          Site::create([
            'user_id'               => auth()->id(),
            'site_url'              => $url,
            'site_category'         => $request->site_category,
            'site_monthly_traffic'  => $request->site_monthly_traffic,
            'site_domain_rating'    => $request->site_domain_rating,
            'site_domain_authority' => $request->site_domain_authority,
            'site_language'         => $request->site_language,
            'site_dofollow'         => $request->site_dofollow,
            'site_c_p_price'        => $request->site_c_p_price ,
            'site_c_c_p_price'      => $request->site_c_c_p_price,
            'site_time'             => $request->site_time,
            'site_link_allow'       => $request->site_link_allow,
            'site_sposored'         => $request->site_sposored,
            'site_indexed'          => $request->site_index,
            'word_limite'           => $request->word_limite,
            'spam_score'            => $request->spam_score,
            'word_limite'           => $request->word_limite,
            'special_requirement'   => $request->special_requirement,
          ]);

          session()->forget('user_url');

          return redirect()->route('platform_index')->with('success','Your Website Sending with success and witing for review..');

    }

    // method for get the performers site and publishers
    public function performers(){

        $sites = Site::all();
        return view('pr.pr_publisher.performers',compact('sites'));
    }


}
