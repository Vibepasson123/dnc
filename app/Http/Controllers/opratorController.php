<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class opratorController extends Controller
{
    
    public function acessOprator()
  {
    return view('oprator.opratorhome');
  }

}
