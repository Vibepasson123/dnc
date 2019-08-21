<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use Cartalyst\Sentinel\Users\EloquentUser; 
use App\User; 
use DB; 
use Sentinel; 

class AdminControl extends Controller {
	public function index() {
		return view('admin.layout.testeman'); 
	}


	public function register() {
		
		if(Sentinel::check()) {
        	return view('admin.layout.nursehome'); 

        } else {
            return redirect('/login');
        }
        
	
	}


	//page only control by admin
	public function accessEmpReg() {
		return view('employee.employeeView'); 
	}


	public function getdata() {

	$users = Sentinel::getUserRepository() -> get(); 
	   return view('doctor.doctorhome', compact('users')); 
	}



	public function assert(Browser $browser)
	{

		$browser->assertPathIs($this->url());
		$new_Addmission = \App\Patient::whereHas('departmetrel', function ($query)
		{ $query->where('try', '>=', Carbon\Carbon::today()); })->get();
		
		foreach($new_Addmission as $add_today){
			$browser->assertSee($add_today->name);
		}
	}


}
