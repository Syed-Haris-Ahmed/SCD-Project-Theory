<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\message;

class MessageController extends Controller
{
    public function index(){

    return view('chat');

    }

    public function post(Request $request){
        event(new message($request->input('message')));
    }
}
