<?php

namespace App\Http\Controllers;

use App\Message;

class MessageFormController extends Controller
{
    public function getIndex(){
    	return view('message_form');
    }
}
