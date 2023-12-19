<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Report;

class AdminController extends Controller
{
    public function index(){
        
        $userid = session('userid');
        $user = User::where('userid',$userid)->first();
        $username = $user->username;
        $reports = Report::all()->toArray();
        return view('admin',['username'=> $username , 'reports'=> $reports]);
    }

    
}
