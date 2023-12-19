<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        // Retrieve chat history from the database
        $chatHistory = Message::all(); // Fetch all messages (modify as needed)
        // $user = User::where('userid',$chatHistory->userid)->first();
        $currentuserid = session('userid');
        // $username = $user->username;
         $user = User::where('userid', $currentuserid)->first();
         $username = $user->username;
        // Return chat history as JSON
        return view('chat', ['chatHistory' => $chatHistory,'username' => $username]);
    }

    public function sendMessage(Request $request)
    {
        // Save message to the database
        $newMessage = new Message();
        $newMessage->content = $request->input('message');
        $newMessage->userid = session('userid');
        $user= User::where('userid',$newMessage->userid)->first();
        $newMessage->username = $user->username;
        // You'll need to set sender ID, timestamp, etc., as required
        $newMessage->save();

        return response()->json(['success' => true]);
    }

}
