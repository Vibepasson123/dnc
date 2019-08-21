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
use Image;
use Validator;
use App\Events\email;

class userProfile extends Controller
{
    public function getProfile() {

        if(Sentinel::check()) {
            return view('users.userProfile', array('user'=>Sentinel::getUser()));
         } else {
            return redirect('/login');
        }
    }

    public function uploadAvatar (Request $request) {

        if($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('uploads/avatars/'.$filename));
            $user = Sentinel::getUser();
            $user->avatar= $filename; 
            $user->avatar_url =url('/')."/uploads/avatars/".$filename;
            $user->save();
        }
        return view('users.userProfile', array('user'=>Sentinel::getUser()));
    }
    public function updatePassword (Request $request) {
        
       
        $validator = Validator::make($request->all() ,[
            'CurrentPassword'=>'required|max:25',
            'NewPassword'=>'required|min:4|max:25',
            'ConfirmPassword'=>'required|min:4|max:25'
        ]);

        if($validator->fails()) {
             return response()->json(['success'=>false,'message'=>'validation error']);
        }
        
        $currentPassword = $request->CurrentPassword;
        $newPassword = $request->NewPassword;
        $confirmPassword =$request->ConfirmPassword;
         
        $hasher = Sentinel::getHasher();
        $user = Sentinel::getUser();
       
        if(!$hasher->check($currentPassword, $user->password) || $newPassword != $confirmPassword) {
            return response()->json(['success'=>false,'message'=>'unuthorized user']);
        }
         Sentinel::update($user, array('password' => $newPassword));

      
          return response()->json(['success'=>true]);
        
    }
    public function updateUser (Request $request) {
    
     
         $validator = Validator::make($request->all() ,[
            'email'=>'required|email',
        ]);

        if($validator->fails()) {
            return response()->json(['success'=>false,'message'=>'validation error']);
       }
   
        $updateUser= User::find(Sentinel::getUser()->id)->update($request->all());

        if($updateUser == true){
            return response()->json(['success'=>true]);
        }else {
            return response()->json(['success'=>false,'message'=>'User Update Unsuccessful']);
        }
         
    }
}
