<?php

namespace App\Http\Controllers;

use App\Note;

class NoteController extends Controller
{
    public function getAll(){
    	$cats = Note::all();
    	return view('note', compact('cats'));
    }

}
