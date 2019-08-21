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
use App\patienthistory;
use App\band;
use DB;
use Mail; 
class Employereg extends Controller
{
  
    public function postemployeeReg(Request $request)
    { 
/*  dd($request->all()); */
      try{
    	 if ($user= Sentinel::register($request->all())){
         $activation = Activation::create ($user);

        $role= Sentinel::findRoleBySlug($request->input('admin'));

        $role->users()->attach($user);

        $this->sendEmail($user,$activation->code);

        return redirect('/employeeView');

       
        }else{
         return redirect()->back()->with(['error'=>'Undefined error contact DNC services'])
         ;

      }
    }
          catch (\Illuminate\Database\QueryException $e) {
           
                dd($e);
           /*  return redirect()->back()->with(['error'=>'Account Already Exsist']); */
         }
  }



     public function create_department(Request $request)

     {
     
      $depart = new department;
      
      $depart ->department_id = $request->input('ptdepartmnet_id');
     // $depart ->id = $request->input('ptdepartmnet_id');
      $depart ->department_name = $request->input('ptdepartmnet_name');
      $depart ->save();

      return redirect('/employeeView');


     }
   
          
    private function sendEmail($user, $code)
    {
      Mail::send('emails.activation',[

        'user'=>$user,
        'code'=>$code

      ], function( $message) use ($user){
        $message->to($user->email);

      });
    }


}
