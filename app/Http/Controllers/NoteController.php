<?php

namespace App\Http\Controllers;

use App\Note;

class NoteController extends Controller
{
    public function getAll(){
    	$cats = Note::all();
    	return view('note', compact('cats'));
    }

    public function getOne($id = null){
    	$obj = Note::find($id);
    	return view('note_single_p', compact('obj'));
    }
}
