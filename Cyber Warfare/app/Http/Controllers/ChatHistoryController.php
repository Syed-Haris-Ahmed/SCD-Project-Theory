<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatHistoryController extends Controller
{
    public function index(){

        return view('chat-history');
    }
}