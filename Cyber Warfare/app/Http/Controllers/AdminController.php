<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        
        $userid = session('userid');
        $user = User::where('userid',$userid)->first();
        $username = $user->username;

        return view('admin',['username'=> $username]);
    }

    
}
