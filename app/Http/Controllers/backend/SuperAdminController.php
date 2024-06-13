<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    // method for super admin show all publisher sites with permessions and actions
    // all publisheres for super admin
    public function all_publishers(Request $request){
        $title = 'All Publishers Sites';
        if (!empty(request('search'))) {
            //return $request->search;
            $sites = Site::on('mysql_main_pr')->where('site_status', '1')
                          ->where('site_name', 'like', '%' . request('search') . '%')
                          ->OrWhere('site_region_location' , 'like', '%' . request('search') . '%')
                          ->OrWhere('site_language' , 'like', '%' . request('search') . '%')
                          ->OrWhere('site_category' , 'like', '%' . request('search') . '%')
                          ->OrWhere('site_url' , 'like', '%' . request('search') . '%')
                          ->paginate(12);
        } else {
            $sites = Site::on('mysql_main_pr')->where('site_status', '1')->paginate(12);
        }


        $title = "publishers";
        $project_id = $request->project_id;

        $sites_count = Site::on('mysql_main_pr')->count();
        return view('pr.pr_superadmin.all_publishers', ['project_id' =>  $project_id , 'sites'  => $sites , 'sites_count' => $sites_count , 'searsh'=> request('search'),'title'=>$title]);
    }


    public function all_disabled_publishers(Request $request){

        $title = 'All Publishers Sites';
        if (!empty(request('search'))){
            //return $request->search;
            $sites = Site::on('mysql_main_pr')->where('site_status', '2')
                          ->where('site_name', 'like', '%' . request('search') . '%')
                          ->OrWhere('site_region_location' , 'like', '%' . request('search') . '%')
                          ->OrWhere('site_language' , 'like', '%' . request('search') . '%')
                          ->OrWhere('site_category' , 'like', '%' . request('search') . '%')
                          ->OrWhere('site_url' , 'like', '%' . request('search') . '%')->paginate(12);
        }else{
            $sites = Site::on('mysql_main_pr')->where('site_status', '2')->paginate(12);
        }


        $title = "publishers";
        $project_id = $request->project_id;

        $sites_count = Site::on('mysql_main_pr')->where('site_status', '2')->count();
        return view('pr.pr_superadmin.all_disabled_publishers', ['project_id' =>  $project_id , 'sites'  => $sites , 'sites_count' => $sites_count , 'searsh'=> request('search'),'title'=>$title]);
    }

    // method for approve publisher
    public function approve_site(Request $request){
       $site = Site::on('mysql_main_pr')->where('id' ,  $request->site_id)->first();
       if(!empty($site)){
        $site->update(['site_status' => '1']);
        return  redirect()->back()->with('success','The site approved with success');
       }else{
        return redirect()->back()->with('danger','Oops there is no site found here? try again ..');
       }
    }

    // method for disapprove publisher
    public function reject_site(Request $request){
        $site = Site::on('mysql_main_pr')->where('id' ,  $request->site_id)->first();
       if(!empty($site)){
        $site->update(['site_status' => '0']);
       return  redirect()->back()->with('success','The site Rejected with success');
       }else{
        return redirect()->back()->with('danger','Oops there is no site found here? try again ..');
       }
    }


    // method for ban site publisher
    public function ban_site(Request $request){
        $site = Site::on('mysql_main_pr')->where('id' ,  $request->site_id)->first();
        if(!empty($site)){
         if($site->super_admin_status == '1'){
            //return 'first';
            $site->update(['super_admin_status' => '0']);
            return  redirect()->back()->with('success','The site Baned successfuly');
         }

         if($site->super_admin_status == '0'){
            //return 'second';
            $site->update(['super_admin_status' => '1']);
            return  redirect()->back()->with('success','The site UnBaned successfuly');
         }


       }else{
        return redirect()->back()->with('danger','Oops there is no site found here? try again ..');
       }
    }

}
