<?php

namespace App\Http\Controllers;
use App\User;
use App\department;
use App\patient;
use App\patienthistory;
use App\band;
use Carbon;
use Mail; 
use DB;
use departmentrel;
use App\o2;
use App\heartRate;
use App\temp;
use Charts;
use Sentinel;
use App\bloodPressure;
use Illuminate\Http\Request;


class patienttimeline extends Controller
{
   public function patienttl()
   {
       if(Sentinel::check()){
           $patientime=Patient::whereHas('departmetrel', function ($query)
            { $query->where('department_department_id','=' , Sentinel::getUser()->depart );
             })->whereHas('patienthealth', function($q){
            $q->where('try','>=' ,Carbon\Carbon::today() );})->get();
        
            $pa=Patient::whereHas('departmetrel', function ($query)
            { $query->where('department_department_id','=' , Sentinel::getUser()->depart );
             })->whereHas('pblood', function($q){
            $q->where('try','>=' ,Carbon\Carbon::today() );})->get();
        return view('nurse.healthstatus',compact('patientime','pa'));

       }
   
    else 
    Sentinel::logout();
     
        
    return redirect('/login');


      
   }

}
