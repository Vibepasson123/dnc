<?php

namespace App\Http\Controllers;
use App\User;
use Sentinel;
use App\Messages;
use App\Events\NewMessage;
use Illuminate\Http\Request;
class ChatMessage extends Controller
{
    public function getMessage(){

        if(Sentinel::check()) {
            return view('emails.message');

        } else {
            return redirect('/login');
        }
        
      
      
    }
    public function get(){
        
        
        $contacts= User::whereHas('employee_sat', function ($query) { $query->where('completed', '=',1 ); })->get();
        $unreadIds = Messages::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
            ->where('to', Sentinel::getUser()->id)
            ->where('read', false)
            ->groupBy('from')
            ->get();
           $contacts = $contacts->map(function($contact) use ($unreadIds) {
            $contactUnread = $unreadIds->where('sender_id', $contact->id)->first();
            $contact->unread = $contactUnread ? $contactUnread->messages_count : 0;
            return $contact;
        });
        return response()->json($contacts);

    }
    public function getMessageFor($id)

    {
      //  $messages = message::where('from',$id)->orWhere('to',$id)->get();
        Messages::where('from', $id)->where('to', Sentinel::getUser()->id)->update(['read' => true]);
        // get all messages between the authenticated user and the selected user
        $messages = Messages::where(function($q) use ($id) {
            $q->where('from',Sentinel::getUser()->id);
             $q->where('to', $id);
        })->orWhere(function($q) use ($id) {
            $q->where('from', $id);
            $q->where('to',Sentinel::getUser()->id);
        })
        ->get();
        

        return response ()->json($messages);
    }
    public function send(Request $request)
    {
        $message = Messages::create([
            'from' => Sentinel::getUser()->id,
            'to' => $request->contact_id,
            'text' => $request->text,
        ]);
        broadcast(new NewMessage($message));
        return response()->json($message);
    }

}
