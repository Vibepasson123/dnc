<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Users\EloquentUser;
use App\User;
use DB;
use Sentinel;

class doctorController extends Controller
{
    
    public function acessDoctor()
  {
  	$users = Sentinel::getUserRepository()->get();
    return view('doctors.doctorhome', compact('users'));
  }


}
 