<?php

namespace App\Http\Controllers;
use App\Events\chatEvent;
use Illuminate\Http\Request;
use Sentinel;
use App\User;
use App\Messages;


class userMail extends Controller
{
    public function checkMail()
    {

        return view('emails.userMail');

    }
    public function getMail()

    {
      //  $messages = message::where('from',$id)->orWhere('to',$id)->get();
      $messages =  Messages::where('to','=', Sentinel::getUser()->id) ->get();
       

        return response ()->json($messages);
    }
  
}
