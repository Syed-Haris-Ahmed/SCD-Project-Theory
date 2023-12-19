<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BorderController extends Controller
{
    public function index(){

        return view('BorderUser');
    }

    public function report(){

        $userid = session('userid');
        $user = User::where('userid',$userid)->first();


        if($user->roleid == 2){

            $user->report = true;
            $user->save();
        }
        return redirect()->route('BorderUser');
    }
}
