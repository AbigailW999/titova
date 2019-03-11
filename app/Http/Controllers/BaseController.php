<?php

namespace App\Http\Controllers;

use App\Photo;

class BaseController extends Controller
{
    public function getIndex(){
    	$name_photo = Photo::all();
    	return view('index', compact('name_photo'));
    }
}
