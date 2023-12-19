<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function authentication(Request $request){
        if($request->has('username') && $request->has('password')){
            $username = $request->input('username');
            $password = $request->input('password');
    
            error_log("Username: $username");
            error_log("Password: $password");
    
            $user = User::where('username', $username)->first();
    
            if($user && $password == $user->password){
                // Authentication successful
                error_log("Authentication successful");
                // error_log($user->roleid);

                // Using the session() helper
                session(['userid' => $user->userid]);
                $request->session()->put('username', $user->username);
                if($user->roleid == 2){
                    return redirect()->route('BorderUser');
                } else {
                    return redirect()->route('home');
                }
            } else {
                // Authentication failed
                error_log("Authentication failed");
                error_log("Outside if statement");
                error_log($user->password);
            }
        }
    
        return redirect()->route('login');
    }
    
}
