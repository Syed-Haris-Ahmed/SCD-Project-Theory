<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function storeData(Request $request){

            $validatedData = $request->validate([
                'username' => 'required|string|max:100|unique:user,username',
                'password' => 'required|string|min:6',
                'email' => 'required|email|unique:user,email',
                'locations' => 'nullable|string',
            ]);
            
            if($request->has('locations')){

                $validatedData['roleid']=2; 

            } else {
                $validatedData['roleid']=1;
                $validatedData['locations']=null;
            }

            $user = new User([
                'username' => $validatedData['username'],
                'password' => $validatedData['password'], 
                'email' => $validatedData['email'],
                'roleid' => $validatedData['roleid'] , 
                'location' => $validatedData['locations'] ?? null, 
            ]);

            $user->save();

        return redirect()->route('home');
    }
}
