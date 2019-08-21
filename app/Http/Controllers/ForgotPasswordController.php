<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Reminder;
use Mail;
use Sentinel;
use Validator;

class ForgotPasswordController extends Controller
{
    public function forgotPassword()
    {
      
      return view('admin.ForgotPassword');

    }

    public function postForgotPassword (Request $request)
    {
		$try=$request->input('email');
		$user =User::where('email','=',$try)->first();
		$SentinelUser = Sentinel::findById($user->id);
    	
	

    	
       $reminder = Reminder::exists($SentinelUser) ?: Reminder::create($SentinelUser);

    	$this->SendEmail($user,$reminder->code);

    	return redirect()->back()->with([
    			'success'=>'Reset code was send to registered.'

			]);
		}
		
		
    

    public function resetPassword($email, $resetCode)
    {

    	$user =User::byEmail($email);
    	

			if($SentinelUser = Sentinel::findById($user->id)) {
    	if($reminder = Reminder::exists($SentinelUser)){

    		if($resetCode == $reminder->code)
    			return view('admin.resetPassword');
    		else  
    		  	return redirect('/login');

    	}else{
    		return redirect('/login');
    	}

	}
	else
	abort(404);
    }

    public function postResetPassword(Request $request, $email,$resetCode)
    {

      $this->validate($request, [
      	
      	'password_confirmation'=>'required|min:5|max:10'
      ]);

      $user =User::byEmail($email);



     if($SentinelUser = Sentinel::findById($user->id)) {

      if($reminder = Reminder::exists($SentinelUser)){

      	  if($resetCode == $reminder->code){
             Reminder::complete($SentinelUser,$resetCode,$request->password);
      	  	return redirect('/login')->with('success','Please login with your new password');
          }
      	  	else
      	  		return redirect('/login');
       }else{
       	      return redirect('/');
       }
	}else
    	
	abort(404);
    }

    private function SendEmail($user,$code)
    {
    	Mail::send('emails.forgot-password', [
    		'user' =>$user,
    		'code' =>$code
        	], function($message) use($user){
    		$message->to ($user->email);

    		$message->subject("hello $user->first_name,Reset your password");
    	  });
    }
}
