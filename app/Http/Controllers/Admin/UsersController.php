<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request; 
/*use App\Models\ContactEnquiryModel;*/
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\UserModel;

use Charts;
use Sentinel;
use DB;
use Illuminate\Support\Facades\Input;  
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use app\User;
use Config;
use Auth;

use App\Notifications\ActivationRemainder;  

class UsersController extends Controller
{
	public function __construct()
	{
    	$this->module_view_folder 		= "admin.users";
    	$this->admin_url_path     		= url(config('app.project.admin_panel_slug'));
	}
   
    public function manageUsers()
    {    	
    	$data['users'] = DB::table("users")->get();
    	return view($this->module_view_folder.'.list',$data);
    }

    
}