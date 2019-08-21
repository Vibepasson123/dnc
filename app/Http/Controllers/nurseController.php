<?php

namespace App\Http\Controllers;
use Cartalyst\Sentinel\Users\EloquentUser;
use Sentinel;

use Illuminate\Http\Request;

class nurseController extends Controller
{
    public function acessNurse()
  {
    return view('nurse.nursehome');
  }
   public function getdata()

  {
  	 $users = Sentinel::getUserRepository()->get();
     return view('nurse.nursehome', compact('users'));
  }
}

