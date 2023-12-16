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
                'username' => 'required|string|max:100|unique:users,username',
                'cnic' => 'required|regex:/^\d{5}-\d{7}$/|max:13',
                'password' => 'required|string|min:6',
                'email' => 'required|email|unique:users,email',
                'locations' => 'nullable|string',
            ]);
            
            if($request->has('border_resident')){

                $validatedData['roleid']=2; 

            } else {
                $validatedData['roleid']=1;
                $validatedData['locations']=null;
            }

            $user = new User([
                'username' => $validatedData['username'],
                'password' => $validatedData['password'],
                'cnic'     => $validatedData['cnic'],
                'email' => $validatedData['email'],
                'roleid' => $validatedData['roleid'] , 
                'locations' => $validatedData['locations'] ?? null, 
            ]);

            $user->save();

        return redirect()->route('home');
    }
}
