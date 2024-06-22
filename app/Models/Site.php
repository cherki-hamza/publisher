<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use HasFactory ,Favoriteable , SoftDeletes;

    protected $guarded = [];

    // sit to user
    public function user(){
        return $this->belongsTo(User::class);
    }
    // the site hasMany Orders
    public function orders(){
        return $this->hasMany(Order::class);
    }

    public function publishers()
    {
        return $this->belongsToMany(Publisher::class);
    }

    // custom method for search
    public function scopeSearch($query,$value)
    {
         $query::where('site_name', 'like', "%$value%")
               ->orWhere('site_url', 'like', "%$value%");

    }

    // method for handl the category return from database
    public function handle_category(){
        if(!empty($this->site_category)){

            if($this->site_category == '-'){
                 return 'No Category';
            }else{
                 return $this->site_category;
            }

        }else{
            return 'No Category';
        }

    }


    // method for handl the country : site_region_location return from database
    public function handle_country(){
        if(!empty($this->site_region_location)){

            if($this->site_region_location == '-'){
                 return 'All';
            }else{
                 return $this->site_region_location;
            }

        }else{
            return 'All';
        }

    }


    // method for handl the monthly_traffic : site_monthly_traffic return from database
    public function handle_monthly_traffic(){
        if(!empty($this->site_monthly_traffic)){

            if($this->site_monthly_traffic == '-'){
                 return 'Not Defined';
            }else{
                 return $this->site_monthly_traffic;
            }

        }else{
            return 'Not Defined';
        }

    }


    // method for link insertion
    public function link_insertion(){
        if($this->site_link_allow == 0){
            return 'Not Eligible';
        }else{
            $link = intval($this->site_link_allow) == 1 ? 'Link' : 'Links';

            return "Eligible <span style='font-size:20px;' class='text-danger'> $this->site_link_allow </span>  $link to insert";
        }
    }

    // method for site status
    public function publisher_site_status(){

      //return  ($this->site_status == 0) ?  'Deactive' :  'Active';

      if($this->site_status == '0'){
        return "<span class='text-danger text-center'>Disapproved</span>";
      }elseif($this->site_status == 2){
        return "<span class='text-danger text-center'>AWaiting Approval</span>";
      }else{
            return "<span class='text-success text-center'>Approved</span>";
      }

    }

     // method for site status
     public function site_activity_status(){
        if($this->super_admin_status == '0'){
            return "<span class='text-danger text-center'>Deactived</span>";
          }else{
             return "<span class='text-success text-center'>Active</span>";
          }
     }

     // method for site status
    public function site_ban_btn(){
        if($this->super_admin_status == '0'){
            return "<span class='text-white text-center'>Unblock the site</span>";
          }else{
                return "<span class='text-white text-center'>Block the site</span>";
          }
   }// end site status


    // method for site status
    public function site_status(){
        if($this->site_status == '0'){
            return "<span class='text-danger text-center'>Disapproved</span>";
          }elseif($this->site_status == '2'){
            return "<span class='text-danger text-center'>AWaiting Approval</span>";
          }else{
                return "<span class='text-success text-center'>Approved</span>";
          }
   }// end site status

   // method for the svg status
   public function svg_status(){
        if($this->site_status == '0'){
          return  '<svg style="width: 25px;color: #00d27a; border-color: #00d27a;" class="svg-inline--fa fa-play-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z"></path>
        </svg>';
        }else{
            return  '<svg style="width: 25px;color: #fff; background-color: #00d27a;border-color: #00d27a;" class="svg-inline--fa fa-pause-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="far" data-icon="pause-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm96-280v160c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16zm-112 0v160c0 8.8-7.2 16-16 16h-48c-8.8 0-16-7.2-16-16V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16z"></path>
            </svg>';
        }
   } // end svg status

        // site hasMany tasks
        public function tasks(){
          return $this->hasMany(Task::class);
        }

        // site count
        public function tasks_count(){
            return $this->hasMany(Task::class)->count();
        }

        // site count by p_status = 1
        public function tasks_count_p_status(){
            return $this->hasMany(Task::class)
                       ->where('admin_status' , 1)
                       ->count();
        }



}
