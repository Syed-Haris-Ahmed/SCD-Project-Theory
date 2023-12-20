<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Report;

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

    public function submitReport(Request $request){

        $userid = session('userid');
        $user = User::where('userid',$userid)->first();
        $report = new Report();
        $report->userid = $user->userid;
        $report->title = $request->title;
        $report->description = $request->description;
        $report->save();

        return redirect()->route('BorderUser');

    }
}
