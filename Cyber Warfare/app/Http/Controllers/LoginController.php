<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){

        $session = session('login');

        if($session){
            $username = session('username');
            $user = User::where('username', $username)->first();

            if($user->roleid == 2){

                return redirect()->route('BorderUser');
            } else if($user->role == 3){
                return redirect()->route('admin');
            } else if($user->role == 1){
                return redirect()->route('StandardUser');
            }

        }

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
                session(['login' => true]);
                // Using the session() helper
                session(['userid' => $user->userid]);
                // $request->session()->put('username', $user->username);
                session(['username' => $user->username]);
                if($user->roleid == 2){
                    return redirect()->route('BorderUser');
                }else if($user->roleid == 3){
                    
                    return redirect()->route('admin');
                }else {
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

    public function logout(){

        // session()->forget('userid');
        // session()->forget('username');
        // session()->forget('login');

        session()->flush();

        session()->invalidate();

        session()->regenerate();

        return redirect()->route('login');

    }
    
}
