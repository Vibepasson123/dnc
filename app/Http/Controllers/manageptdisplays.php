<?php

namespace App\Http\Controllers;
use App\User;
use App\department;
use App\patient;
use App\patienthistory;
use App\band;
use DB;
use Carbon;
use Mail; 
use departmentrel;
use App\o2;
use App\heartRate;
use App\temp;
use Charts;
use Sentinel;
use App\patient_message;
use App\bloodPressure;
use Illuminate\Http\Request;

class manageptdisplays extends Controller

{
     public function pt(Request $request)

      {
     
       if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug =='nurse'){
          $patient_message=patient_message::where('department_department_id','=', Sentinel::getUser()->depart)->where('read','=','no')->get();
         /*  dd($patient_message);  */
    /*       dd( Carbon\Carbon::now()); */
        $pthealth= patient::with('patienthealth','pto2','pheart','pblood')->get();
        $newpt= Patient::whereHas('departmetrel', function ($query) { $query->where('try', '>=', Carbon\Carbon::today()); })->get();
        //getting patient according to the department 
         $npt= Patient::whereHas('departmetrel', function ($query) { $query->where('department_department_id','>=' , Sentinel::getUser()->depart ); })->whereHas('pto2', function($q){
            $q->where('try','=' ,Carbon\Carbon::today() );})->get();
            return view('admin.layout.nursehome', compact(
             'pthealth',
             'newpt',
             'npt'
            
         
          ) );
         

           }else{
        
          Sentinel::logout();
     
        
         return redirect('/login');
      }
     
    
    }
        public function dataTest(Request $request)

        {
     
      
          $pthealth= patient::with('patienthealth','pto2','pheart','pblood')->get();
          $newpt= Patient::whereHas('departmetrel', function ($query) { $query->where('try', '>=', Carbon\Carbon::today()); })->get();
          //getting patient according to the department 
          $npt= Patient::whereHas('departmetrel', function ($query) { $query->where('department_department_id','>=' , Sentinel::getUser()->depart
          
           ); })->whereHas('pto2', function($q){
          $q->where('try','>=' ,Carbon\Carbon::today() );})->get();
        
   
        
          return view('admin.layout.test', compact(
         'pthealth',
         'newpt',
         'npt'
         
   ));
         

        }
}
     
    

  


