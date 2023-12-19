<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

        $session = session('login');

        if($session){
            $username = session('username');
            $user = User::where('username', $username)->first();

            if($user->roleid == 2){

                return redirect()->route('BorderUser');
            }

        }

            return view('home');
        
    }
}
