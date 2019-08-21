<?php

namespace App\Http\Controllers;
use App\review;
use Illuminate\Http\Request;
use Cartalyst\Sentinel\Users\EloquentUser;
use App\User;
use App\department;
use DB;
use App\Role;
use Sentinel;
use App\band;
use App\activation;



class reviews extends Controller
{
   public function postReview(Request $request)
    {
      $rev = new review;
      $rev->name=$request->input('name');
      $rev->email=$request->input('email');
      $rev->message=$request->input('message');
      $rev->save();
      
      return view ('admin.DNC-Welcome', compact('rev'));

    }
}

