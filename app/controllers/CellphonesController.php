<?php

class CellphonesController extends \BaseController {

	/**
	 * Display a listing of cellphones
	 *
	 * @return Response
	 */
	public function index()
	{
		$cellphones = Cellphone::all();

		return View::make('cellphones.index', compact('cellphones'));
	}

	/**
	 * Show the form for creating a new cellphone
	 *
	 * @return Response
	 */
	public function create()
	{
		//$users = User::select(DB::raw('concat (first_name," ",last_name) as full_name, id'))->lists('full_name', 'id');
		//return View::make('cellphones.create')->with('users',$users);

		return View::make('cellphones.create');
	}

	/**
	 * Store a newly created cellphone in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules=array(
			'number' => 'required|numeric',
	        'model' => 'required',
			'trade_mark' => 'required',
			'company' => 'required',
			'imei' => 'required|numeric',
			'plan_name' => 'required',
			'plan_description' => 'required',
			'plan_name' => 'required',
			'plan_description' => 'required',
			'plan_cost' => 'required|numeric',
			'plan_iva_cost' => 'required|numeric',
    	);
		$input = Input::all();
		$validation = Validator::make($input, $rules);
		if ($validation->passes())
		  {
		  	Cellphone::create($input);
	      return Redirect::route('cellphones.index')
	          ->withInput()
	          ->withErrors($validation)
	          ->with('message', 'Cellar Registrado Exitosamente');
		  }
		   //show error message
		return Redirect::route('cellphones.create')
		   ->withInput()
		   ->withErrors($validation)
		   ->with('message', 'Falta completar unos campos.');
	}

	/**
	 * Display the specified cellphone.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cellphone = Cellphone::findOrFail($id);

		return View::make('cellphones.show', compact('cellphone'));
	}

	/**
	 * Show the form for editing the specified cellphone.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cellphone = Cellphone::find($id);

		return View::make('cellphones.edit', compact('cellphone'));
	}

	/**
	 * Update the specified cellphone in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			$rules=array(
			'number' => 'required|numeric',
	        'model' => 'required',
			'trade_mark' => 'required',
			'company' => 'required',
			'imei' => 'required|numeric',
			'plan_name' => 'required',
			'plan_description' => 'required',
			'plan_name' => 'required',
			'plan_description' => 'required',
			'plan_cost' => 'required|numeric',
			'plan_iva_cost' => 'required|numeric',
    	);

		//get all Sector information
    	$input = Input::all();
	    //get all cellphones information
		$validation = Validator::make($input, $rules);
		if ($validation->passes())
		  {
	      $cellphones = Cellphone::find($id);
	      $cellphones->update($input);
	      return Redirect::route('cellphones.index')
	          ->withInput()
	          ->withErrors($validation)
	          ->with('message', 'Celular Actualizado');
		  }
	  	return Redirect::route('cellphones.edit', $id)
	      ->withInput()
	      ->withErrors($validation)
	      ->with('message', 'Hubo errores en la validación.');
	}

	/**
	 * Remove the specified cellphone from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Cellphone::destroy($id);

		return Redirect::route('cellphones.index');
	}

}
