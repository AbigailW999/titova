<?php

namespace App\Http\Controllers;


class ContactController extends Controller
{
    public function getIndex(){
    	return view('message');
    }
}