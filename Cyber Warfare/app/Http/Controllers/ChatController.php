<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use App\Models\LiveChat;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ChatController extends Controller
{
    public function index()
    {
        // Retrieve chat history from the database
        $liveChat = LiveChat::first();
        if($liveChat->status == 1){
        // $chatHistory = Message::all(); // Fetch all messages (modify as needed)
        // $user = User::where('userid',$chatHistory->userid)->first();
        $currentuserid = session('userid');
        // $username = $user->username;
         $user = User::where('userid', $currentuserid)->first();
         $username = $user->username;
        
         $location = session('location');
         $chatHistory = Message::where('city',$location)->get();

        return view('chat', ['chatHistory' => $chatHistory,'username' => $username,'location' => $location]);
        } else {
            return view('disabled');
        }
    }

    public function sendMessage(Request $request)
    {

        $messageContent = $request->input('message');
    if (empty($messageContent)) {
        return response()->json(['success' => false, 'error' => 'Message content is empty']);
    }
        // Save message to the database
        $newMessage = new Message();
        $newMessage->content = $request->input('message');
        $newMessage->userid = session('userid');
        $user= User::where('userid',$newMessage->userid)->first();
        $newMessage->username = $user->username;
        $newMessage->city = $user->locations;
        // You'll need to set sender ID, timestamp, etc., as required
        $newMessage->save();

        return response()->json(['success' => true]);
    }


}
