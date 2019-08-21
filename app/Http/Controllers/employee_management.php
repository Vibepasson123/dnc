<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request; 
use Cartalyst\Sentinel\Users\EloquentUser; 
use App\User; 
use App\department; 
use DB; 
use App\Role; 
use Sentinel; 
use App\band; 
use App\throttle; 
use App\review;
use App\activation; 

class employee_management extends Controller {

    public function manage() {
        $users = User::with('employee_sat') -> get(); 
        $thrt = User::all(); 
        $banderror = band::where('status', '=', '3') -> get(); 
        $depart = department::all(); 
        $role = Role::all(); 
        $damage = band::where('status', '=', '3') -> get(); 
        $Avilable = band::where('status', '=', '1') -> get(); 
        $pubMsg=review::all();
        $deactive_user = User::whereHas('employee_sat', function ($query) {$query -> where('completed', '=', '2'); }) -> get(); 

        $satus = User::whereHas('employee_sat', function($q) {$q -> where('completed', '=', '1'); }) -> get(); 

        if(Sentinel::check()) {
            return view('employee.employeeView', compact('users',  'banderror', 'depart', 'role',  'deactive_user',  'damage',  'Avilable', 
            'satus', 
            'thrt',
            'pubMsg'
            )); 
          } else {
            return redirect('/login');
        }
    }

    public function readdata() {
        $users = User::with('employee_sat') -> get(); 
        return response($users); 
    }

    public function deactivation(Request $request) {

        $password = $request -> input('password'); 
        $userid = Sentinel::getUser() -> email; 
        $employee_id = $request -> input('eid'); 
        $value = $request -> input('act'); 
        $employee_id = $request -> input('eid'); 
        $state = $request -> input('activation'); 
        $reasons = $request -> input('res'); 
        $Loguser= User::where('id','=',$employee_id)->first();

        if($Loguser->logstatus == 1) {
            return redirect() -> back();
        }

        if ($employee_id == Sentinel::getUser() ->id) {
             return redirect() -> back() -> with(['error' => 'You are not Authorized to make change status of  your account!']); 
        } else {
            try {

                if ($user = Sentinel::authenticate($request -> all())) {
                    $sug = Sentinel::getUser() -> roles() -> first() ->slug; 
                    if ($sug == 'admin'){
                        $activate = activation::where('user_id', '=', $employee_id) -> first(); 
                        $activate -> completed = $request -> input('act'); 
                        $activate -> reason = $reasons; 
                        $activate -> action_by = Sentinel::getUser() ->email; 
                        $activate -> save(); 
                        return redirect() -> back() -> with(['rdem' => 'User Deactivated']); 
                    }
                }else {
                    return redirect()  -> back() -> with(['eorr' => 'Unauthorised Request Contact Your Admin']); 
                }

        }catch(ThrottlingException $e) {
            $delay = $e -> getDelay(); 
            $log = Sentinel::getUser() ->id; 
            $sta = 2; 
            $logp = User::find($log); 
            $logp -> logstatus = $sta; 
            $logp -> save(); 
            Sentinel::logout(); 
            return redirect('/login') -> with(['error' => " You are band for $delay seconds"]); 
        }
      }
    }
    public function activation(Request $request) {

        $password = $request -> input('password'); 
        $userid = Sentinel::getUser() -> email; 
        $employee_id = $request -> input('eid'); 
        $value = $request -> input('act'); 

        if ($employee_id == Sentinel::getUser() -> id) {
            return redirect() -> back() -> with(['error' => 'You are not Authorized to make change status of  your account!']); 
        }else
            try {

                if ($user = Sentinel::authenticate($request -> all())) {
                $sug = Sentinel::getUser() -> roles() -> first() -> slug; 

                if ($sug == 'admin')
                
                $activate = activation::where('user_id', '=', $employee_id) -> first(); 
                $activate -> completed = $request -> input('act'); 
                $activate -> action_by = Sentinel::getUser() -> email; 
                $activate -> save(); 
                return redirect() -> back() -> with(['sucess' => 'Unauthorised Request Contact Your Admin']); 

                }else {

                return redirect() -> back() -> with(['eorr' => 'Unauthorised Request Contact Your Admin']); 

            }

        }catch(ThrottlingException $e) {
            $delay = $e -> getDelay(); 
            $log = Sentinel::getUser() -> id; 
            $sta = 2; 

            $logp = User::find($log); 
            $logp -> logstatus = $sta; 
            $logp -> save(); 
            Sentinel::logout(); 
            return redirect() -> back()  -> with(['error' => " You are band for $delay seconds"]); 

            }

        }
}

