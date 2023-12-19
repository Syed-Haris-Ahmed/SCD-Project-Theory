<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class StandardController extends Controller
{
    public function index(){
        $userid = session('userid');
        $user = User::where('userid', $userid)->first();

        return view('standard')->with('user', $user);
    }
}
