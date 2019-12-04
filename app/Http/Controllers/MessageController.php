<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function getProfMessage($id){
        $messages = Message::where('to',$id)->where('from',auth()->user()->id)->orWhere('from',$id)->where('to',auth()->user()->id)->get();
        return response()->json($messages);
    }

    public function sendMessage(Request $request){
        $message =Message::create([
            'from' => auth()->user()->id,
            'to' => $request->contact_id,
            'text' => $request->text
        ]);
        return response()->json($message);
    }
}
