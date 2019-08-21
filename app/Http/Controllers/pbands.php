<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\QueryException;
use Sentinel;
use Activation;
use App\User;
use App\department;
use App\patient;
use App\band;
use DB;
use Mail; 

class pbands extends Controller
{
    
     public function addnewband(Request $request)

     {
     
      $ptbands= new band;
      
      $ptbands ->band_id = $request->input('bandid');
      $ptbands ->mac_id = $request->input('macid');
      $ptbands ->ipaddress = $request->input('ipadd');
      $ptbands ->status =$request->input('status');
      $ptbands ->save();

      return redirect('/employeeView');


     }
    
}
