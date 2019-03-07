<?php

namespace App\Http\Controllers;

use App\Message;

class MessageController extends Controller
{
    public function getIndex(){
    	return view('message');
    }
}
