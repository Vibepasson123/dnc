<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;

class login extends Controller
{
    public function login()
    {
      return view('admin.login');
    }
    public function postlogin(Request $request)
    {
    
      
      try{
        if ($user= Sentinel::authenticate($request->all())) {
          
           $log=Sentinel::getUser()->id;
           $sta=1;

         $logp=User::find($log);
         $logp->logstatus=$sta;
         $logp->save();
         $sug=Sentinel::getUser()->roles()->first()->slug;

        if($sug =='admin')
         return redirect('/register');

         elseif($sug=='nurse')

          return redirect('/nursehome');
        elseif($sug=='manager')
          

          return redirect('/nursehome');

          return Sentinel::check();
        
        }else{
         return redirect()->back()->with(['error'=>'check Input data'])
         ;

      }

      } catch(ThrottlingException $e){
        $delay = $e->getDelay();

         return redirect()->back()->with(['error'=>" You are band for $delay seconds"])
         ;

      }
       catch (NotActivatedException $e){

         return redirect()->back()->with(['error'=>'Account Not Activated'])
         ;
      }
    	

      
     
    }

    public function logout()
   {
     $log=Sentinel::getUser()->id;
     $sta=2;

      $logp=User::find($log);
      $logp->logstatus=$sta;
      $logp->save();
   	  Sentinel::logout();

      return redirect('/login');
   }
}
