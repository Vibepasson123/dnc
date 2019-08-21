<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use DB;
use Mail;



class manager extends Controller
{
     public function regmanager(Request $request)
    {
    	$user= Sentinel::registerAndActivate($request->all());

    	$role= Sentinel:: findRoleBySlug('manager');

    	$role->users()->attach($user);

       return redirect('/employeeRegistration');

    }
   
   
}
