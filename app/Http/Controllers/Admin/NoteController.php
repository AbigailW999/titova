<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Note;
use App\Http\Requests\CreateNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class NoteController extends Controller {

	/**
	 * Display a listing of note
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $note = Note::all();

		return view('admin.note.index', compact('note'));
	}

	/**
	 * Show the form for creating a new note
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.note.create');
	}

	/**
	 * Store a newly created note in storage.
	 *
     * @param CreateNoteRequest|Request $request
	 */
	public function store(CreateNoteRequest $request)
	{
	    $request = $this->saveFiles($request);
		Note::create($request->all());

		return redirect()->route(config('quickadmin.route').'.note.index');
	}

	/**
	 * Show the form for editing the specified note.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$note = Note::find($id);
	    
	    
		return view('admin.note.edit', compact('note'));
	}

	/**
	 * Update the specified note in storage.
     * @param UpdateNoteRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateNoteRequest $request)
	{
		$note = Note::findOrFail($id);

        $request = $this->saveFiles($request);

		$note->update($request->all());

		return redirect()->route(config('quickadmin.route').'.note.index');
	}

	/**
	 * Remove the specified note from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Note::destroy($id);

		return redirect()->route(config('quickadmin.route').'.note.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Note::destroy($toDelete);
        } else {
            Note::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.note.index');
    }

}
