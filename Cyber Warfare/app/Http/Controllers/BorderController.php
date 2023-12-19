<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BorderController extends Controller
{
    public function index(){
        $userid = session('userid');
        $user = User::where('userid', $userid)->first();

        return view('BorderUser')->with('user', $user);
    }

    public function report(){

        $userid = session('userid');
        $user = User::where('userid',$userid)->first();


        if($user->roleid == 2 && !$user->report){

            $user->report = true;
            $user->save();
        }
        return redirect()->route('BorderUser');
    }
}
