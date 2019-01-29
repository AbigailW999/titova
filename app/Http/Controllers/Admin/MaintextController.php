<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Maintext;
use App\Http\Requests\CreateMaintextRequest;
use App\Http\Requests\UpdateMaintextRequest;
use Illuminate\Http\Request;



class MaintextController extends Controller {

	/**
	 * Display a listing of maintext
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $maintext = Maintext::all();

		return view('admin.maintext.index', compact('maintext'));
	}

	/**
	 * Show the form for creating a new maintext
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.maintext.create');
	}

	/**
	 * Store a newly created maintext in storage.
	 *
     * @param CreateMaintextRequest|Request $request
	 */
	public function store(CreateMaintextRequest $request)
	{
	    
		Maintext::create($request->all());

		return redirect()->route(config('quickadmin.route').'.maintext.index');
	}

	/**
	 * Show the form for editing the specified maintext.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$maintext = Maintext::find($id);
	    
	    
		return view('admin.maintext.edit', compact('maintext'));
	}

	/**
	 * Update the specified maintext in storage.
     * @param UpdateMaintextRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateMaintextRequest $request)
	{
		$maintext = Maintext::findOrFail($id);

        

		$maintext->update($request->all());

		return redirect()->route(config('quickadmin.route').'.maintext.index');
	}

	/**
	 * Remove the specified maintext from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Maintext::destroy($id);

		return redirect()->route(config('quickadmin.route').'.maintext.index');
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
            Maintext::destroy($toDelete);
        } else {
            Maintext::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.maintext.index');
    }

}
