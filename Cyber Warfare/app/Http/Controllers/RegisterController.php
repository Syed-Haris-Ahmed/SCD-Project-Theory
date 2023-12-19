<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function storeData(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|string|max:100|unique:users,username',
            'cnic' => 'required|digits:13|unique:users,cnic',
            'password' => 'required|string|min:6',
            'email' => 'required|email|unique:users,email',
            'locations' => 'nullable|string',
        ]);

        error_log(print_r($validatedData, true));
        
        if($request->has('border_resident')){
            error_log("Error Log -> Inside IF Statement");
            $validatedData['roleid']=2; 

        } else {
            error_log("Erro Log -> Inside ELSE Statement");
            $validatedData['roleid']=1;
            $validatedData['locations']=null;
        }

        error_log(print_r($validatedData, true));

        // $user = new User([
        //     'username' => $validatedData['username'],
        //     'password' => $validatedData['password'],
        //     'cnic'     => $validatedData['cnic'],
        //     'email' => $validatedData['email'],
        //     'roleid' => $validatedData['roleid'] , 
        //     'locations' => $validatedData['locations'] ?? null, 
        // ]);

        $user = User::create($validatedData);

        return redirect()->route('login');
    }
}
