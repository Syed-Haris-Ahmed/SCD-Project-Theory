<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Report;
use App\Models\LiveChat;

class AdminController extends Controller
{
    public function index(){
        
        $userid = session('userid');
        $user = User::where('userid',$userid)->first();
        $username = $user->username;
        $reports = Report::all()->toArray();
        return view('admin',['username'=> $username , 'reports'=> $reports]);
    }

    public function activate(){

        $liveChat = LiveChat::where('status', '0')->update(['status' => '1']);

        return redirect()->route('admin');

    }

    public function disable(){

        $liveChat = LiveChat::where('status', '1')->update(['status' => '0']);

        return redirect()->route('admin');

    }


}
